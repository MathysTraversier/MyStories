<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>MyStories</title>
</head>

<body>
    <?php
    require("includes/connect.php");
    require("includes/navbar.php");

    if (isset($_GET['sto_id']) && isset($_GET['ste_id'])) {
        $_SESSION['sto_id'] = $_GET['sto_id'];
        $_SESSION['ste_id'] = $_GET['ste_id'];

        $requete = "TRUNCATE TABLE usr_choice";
        $response = $bdd->prepare($requete);
        $response->execute();

        $requete = "SELECT sto_played FROM story where 
              sto_id = ?";
        $response = $bdd->prepare($requete);
        $response->execute(array($_SESSION['sto_id']));
        $data = $response->fetch();

        $requete = "UPDATE story SET sto_played = ? where 
                sto_id = ?";
        $response = $bdd->prepare($requete);
        $response->execute(array($data['sto_played'] + 1, $_SESSION['sto_id']));
    }

    $requete = "SELECT * FROM story where 
              sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id']));
    $data = $response->fetch();

    $requete = "SELECT * FROM step where sto_id = ? AND ste_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id'], $_SESSION['ste_id']));
    $step = $response->fetch();

    $requete = "SELECT * FROM usr_choice";
    $response = $bdd->prepare($requete);
    $response->execute();
    $usr_choices = $response->fetchAll();

    $requete = "SELECT DISTINCT * FROM choice where cho_ste = ? AND (cho_related is null OR cho_related IN (SELECT cho_id FROM usr_choice))";
    $response = $bdd->prepare($requete);
    $response->execute(array($step['ste_choiceType']));
    $choices = $response->fetchAll();
    ?>

    <div class="container mt-5">
        <div id="pageStory" class="card page p-5">
            <h3 class="titrePage text-center"><?= $data['sto_title'] ?></h3>
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
                        <a href="addChoiceBDD.php?ste_id=<?= $choice['ste_id'] ?>&cho_id=<?= $choice['cho_id'] ?>" class="btn btn-sm me-2 btnRouge p-3"><?= $choice['cho_description'] ?></a>
                    </div>
                <?php
                }
                ?>
            </div>
            <?php
            if ($step['ste_end']) {
                $_SESSION['ste_victory'] = $step['ste_victory'];
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