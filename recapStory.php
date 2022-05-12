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

    $requete = 'DELETE FROM data_story WHERE usr_id=:user AND sto_id=:story';
    $response = $bdd->prepare($requete);
    $response->execute(array(
        'user' => $_SESSION['userID'],
        'story' => $_SESSION['sto_id']
    ));

    $requete = "SELECT choice.cho_description FROM choice, usr_choice WHERE usr_choice.cho_id = choice.cho_id";
    $response = $bdd->prepare($requete);
    $response->execute();
    $choices = $response->fetchAll();
    ?>

    <div class="container mt-5">
        <div id="pageStory" class="card page p-5 mb-5">
            <h3 class="titrePage text-center">RECAPITULATIF DE L'HISTOIRE</h3>
            <div class="row mt-5">
                <?php
                if (isset($_SESSION['ste_victory'])) {
                    if (!$_SESSION['ste_victory']) {
                ?>
                        <div class="col">
                            <p> Vous êtes arrivés à la fin de l'histoire ! Malheureusement vous n'avez pas fait les bons choix pour vous mener à la victoire. Voici le parcours que vous avez décidé d'emprunter :</p>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col">
                            <p> Vous êtes arrivés à la fin de l'histoire ! Vos choix stratégiques vous ont mené à la victoire. Félicitations ! Voici le parcours que vous avez décidé d'emprunter :</p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <ul>
                        <?php
                        foreach ($choices as $choice) {
                        ?>
                            <li><?= $choice['cho_description'] ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p>Si vous n’êtes pas satisfait du chemin que vous avez emprunté, il est encore temps de rejouer l’histoire ! Sinon, d’autres histoires vous attendent sur la page d’accueil.</p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col">
                    <a href="traitement/initialisationHistoire.php?sto_id=<?= $_SESSION['sto_id'] ?>&ste_id=<?= $_SESSION['storyStart'] ?>&new=1" class="btn btn-sm me-2 btnRouge p-3">Rejouer l'histoire</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>