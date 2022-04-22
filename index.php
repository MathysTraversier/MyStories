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
    <title>Document</title>
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
                <img class="rounded float-start" src="images/<?= $story['sto_image'] ?>" width="100px" />
                <h3><a class="storyTitle" href="story.php?id=<?= $movie['sto_id'] ?>"><?= $story['sto_title'] ?></a></h3>
                <p class="storyContent"><?= $story['sto_description_long'] ?></p>
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