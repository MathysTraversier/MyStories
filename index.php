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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
            if (!$story['sto_hidden'] || (isset($_SESSION['admin']) && $_SESSION['admin'])) {
        ?>
                <article class="mb-5 story">
                    <div class="container px-4">
                        <div class="row gx-1">
                            <div class="col-2">
                                <div class="p-3"><img class="rounded float-start" src="images/<?= $story['sto_image'] ?>" width="100" height="150" /></div>
                            </div>
                            <?php
                            if (isset($_SESSION['user'])) {
                            ?>
                                <div class="col-8">
                                <?php
                            } else {
                                ?>
                                    <div class="col-10">
                                    <?php
                                }
                                    ?>
                                    <div class="p-3">
                                        <h3 class="storyTitle"><?= $story['sto_title'] ?></h3>
                                        <?php
                                        if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                                            if ($story['sto_hidden']) {
                                        ?>
                                                <a class="admin active" href="cacher.php?sto_id=<?= $story['sto_id'] ?>&sto_hidden=<?= $story['sto_hidden'] ?>"><i class="bi bi-eye-slash-fill me-2" style="font-size: 25px;"></i></a>
                                            <?php
                                            } else {
                                            ?>
                                                <a class="admin" href="cacher.php?sto_id=<?= $story['sto_id'] ?>&sto_hidden=<?= $story['sto_hidden'] ?>"><i class="bi bi-eye-slash-fill me-2" style="font-size: 25px;"></i></a>
                                            <?php
                                            }
                                            ?>
                                            <a class="admin" href="#"><i class="bi bi-pencil-square me-2" style="font-size: 25px;"></i></a>
                                            <a class="admin" href="#"><i class="bi bi-trash-fill" style="font-size: 25px;"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <p class="storyContent"><?= $story['sto_description'] ?></p>
                                    </div>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                    ?>
                                        <div class="col-1">
                                            <div class="p-3 mt-5">
                                                <?php
                                                $requete = "SELECT * FROM step where sto_id = ? AND ste_start = ?";
                                                $response = $bdd->prepare($requete);
                                                $response->execute(array($story['sto_id'], true));
                                                $start = $response->fetch();
                                                ?>
                                                <a href="story.php?sto_id=<?= $story['sto_id'] ?>&ste_id=<?= $start['ste_id'] ?>" class="btn btn-sm btnRouge">Démarrer</a>
                                            </div>
                                        </div>
                                        <?php
                                        if ($_SESSION['admin']) {
                                        ?>
                                            <div class="col-1">
                                                <div class="p-3 mt-5">
                                                    <a href="stats.php?id=<?= $story['sto_id'] ?>"><img src="images/tableau-statistique.png" width="32px" alt="Stats" /></a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </div>

                        </div>
                </article>
        <?php
            }
        }
        ?>
        <div class="row text-center pb-5 gx-1">
            <div class="col">
                <?php
                if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                ?>
                    <a href="creationHistoire.php" class="btn btn-sm me-2 btnRouge p-3">Créer une nouvelle histoire</a>
                <?php
                }
                ?>
            </div>
        </div>


        <hr />

        <footer class="footer text-center pb-5">
            Construit avec ❤ par Léna et Mathys</a>.
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>