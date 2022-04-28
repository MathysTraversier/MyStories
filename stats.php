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
    <div class="container text-center">
        <h3 class="storyTitle">STATISTIQUES DE L'HISTOIRE</h3>
        <div class="row justify-content-md-center">
            <div class="col-3">
                <div class="p-3"><img class="rounded float-start" src="images/Affiche_Ocean.png" width="100px" /></div>
            </div>
            <div class="col-3">
                <div class="p-3">
                    <h3 class="storyTitle">coucou</h3>
                    <p class="storyContent">coucou</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>