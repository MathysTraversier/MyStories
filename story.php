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

    $requete = "SELECT * FROM story where 
              sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_GET['id']));
    $data = $response->fetch();
    ?>

    <div class="container mt-5">
        <div class="card pageStory p-5">
            <h3 class="titrePage text-center"><?= $data['sto_title'] ?></h3>
            <div class="row mt-5">
                <div class="col">
                    <p><?= $data['sto_start'] ?></p>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>