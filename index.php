<!DOCTYPE html>
<?php
require("includes/connect.php");
?>
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
    require("includes/navbar.php");
    ?>

    <div class="container mt-5">
        <?php
        $sqlQuery = 'SELECT * FROM story';
        $storiesStatement = $bdd->prepare($sqlQuery);
        $storiesStatement->execute();
        $stories = $storiesStatement->fetchAll();

        foreach ($stories as $story) {
        ?>
            <article class="mb-5 story">
                <div class="container px-4">
                    <div class="row gx-1">
                        <div class="col-2">
                            <div class="p-3"><img class="rounded float-start" src="images/<?= $story['sto_image'] ?>" width="100" height="150" /></div>
                        </div>
                        <div class="col-8">
                            <div class="p-3">
                                <h3 class="storyTitle"><?= $story['sto_title'] ?></h3>
                                <img src="images/hide.png" width="25px" alt="Cacher_Histoire" id="cacher"/>
                                <img src="images/edit(1).png" width="21px" alt="Modifier_Histoire" id="modifier"/>
                                <img src="images/bouton-supprimer(1).png" width="21px" alt="Modifier_Histoire" id="supprimer"/>
                                <p class="storyContent"><?= $story['sto_description'] ?></p>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="p-3 mt-5">
                                <a href="story.php?id=<?= $story['sto_id'] ?>" class="btn btn-sm btnRouge">Démarrer</a>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="p-3 mt-5">
                                <a href="stats.php?id=<?= $story['sto_id'] ?>"><img src="images/tableau-statistique.png" width="32px" alt="Stats" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        <?php
        }
        ?>

        <hr />

        <footer class="footer text-center">
            Construit avec ❤ par Léna et Mathys</a>.
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>