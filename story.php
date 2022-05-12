<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MyStories</title>
</head>

<body>
    <?php
    require("includes/connect.php");
    require("includes/navbar.php");

    $requete = "SELECT * FROM story where 
              sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id']));
    $data = $response->fetch();

    $requete = "SELECT * FROM step where sto_id = ? AND ste_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id'], $_SESSION['ste_id']));
    $step = $response->fetch();

    $requete = "SELECT * FROM usr_choice, choice WHERE choice.cho_id = usr_choice.cho_id AND choice.sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id']));
    $usr_choices = $response->fetchAll();

    $requete = "SELECT DISTINCT choice.cho_description, choice.cho_id, relation.ste_id FROM choice, relation where choice.sto_id = ? AND choice.cho_id = relation.cho_id AND choice.cho_ste = ? AND (relation.cho_related is null OR relation.cho_related IN (SELECT cho_id FROM usr_choice))";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id'], $step['ste_choiceType']));
    $choices = $response->fetchAll();

    if (isset($_SESSION['saveLife']) && !$_SESSION['saveLife']) {
        if ($step['ste_lossPV']) {
            $_SESSION['lives']--;
        } else if ($step['ste_end'] && !$step['ste_victory']) {
            $_SESSION['lives'];
        }
    }

    $_SESSION['saveLife'] = false;

    $req = $bdd->prepare('UPDATE `data_story` SET `ste_id` = :step WHERE sto_id = :story AND usr_id = :user');
    $req->execute(array(
        'step' => $_SESSION['ste_id'],
        'story' => $_SESSION['sto_id'],
        'user' => $_SESSION['userID']
    ));
    $req = $bdd->prepare('UPDATE `data_story` SET `lives` = :lives WHERE sto_id = :story AND usr_id = :user');
    $req->execute(array(
        'lives' => $_SESSION['lives'],
        'story' => $_SESSION['sto_id'],
        'user' => $_SESSION['userID']
    ));
    ?>

    <div class="container mt-5">
        <div id="pageStory" class="card page p-5 mb-5">
            <div class="row text-end">
                <div class="col">
                    <i class="bi bi-suit-heart-fill" style="color: #F25B61;"></i>
                    <?= $_SESSION['lives'] ?>
                </div>
            </div>
            <h3 class=" titrePage text-center"><?= $data['sto_title'] ?></h3>
            <?php
            if ($_SESSION['lives'] > 0 || ($_SESSION['lives'] == 0 && $step['ste_end'])) {
            ?>
                <div class="row mt-5">
                    <div class="col">
                        <p><?= $step['ste_description'] ?></p>
                    </div>
                </div>
                <div class="row text-center mt-3">
                    <?php
                    foreach ($choices as $choice) {
                    ?>
                        <div class="col">
                            <a href="traitement/addChoiceBDD.php?ste_id=<?= $choice['ste_id'] ?>&cho_id=<?= $choice['cho_id'] ?>" class="btn btn-sm me-2 btnRouge p-3"><?= $choice['cho_description'] ?></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            } else {
            ?>
                <div class="row mt-5">
                    <div class="col">
                        <p>Vous n'avez malheureusement plus de vie, votre personnage n'est plus en état de continuer l'aventure !</p>
                    </div>
                </div>
            <?php
            }
            if ($step['ste_end'] || $_SESSION['lives'] == 0) {
                if ($_SESSION['lives'] > 0) {
                    $_SESSION['ste_victory'] = $step['ste_victory'];
                } else {
                    $_SESSION['ste_victory'] = 0;
                }
                if ($_SESSION['ste_victory']) {
                    $req = $bdd->prepare('UPDATE `story` SET `sto_success` = :success WHERE sto_id = :id');
                    $req->execute(array(
                        'success' => $data['sto_success'] + 1,
                        'id' => $data['sto_id']
                    ));
                }
            ?>
                <div class="row text-center mt-3">
                    <div class="col">
                        <a href="recapStory.php" class="btn btn-sm me-2 btnRouge p-3">Terminer l'histoire</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>