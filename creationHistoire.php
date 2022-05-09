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

    ?>
    <div class="container mt-5 mb-5">
        <div id="pageCreation" class="card page p-5">
            <h3 class="titrePage text-center">SAISIR UNE NOUVELLE HISTOIRE</h3>
            <form method="POST" action="ajoutHistoireBDD.php" enctype="multipart/form-data">
                <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                ?>
                    <div class="form-outline w-75 mx-auto mb-2 text-center text-danger">
                        Une erreur est survenue lors du transfert.
                    </div>
                <?php
                } else if (isset($_GET['error']) && $_GET['error'] == 2) {
                ?>
                    <div class="form-outline w-75 mx-auto mb-2 text-center text-danger">
                        Une erreur est survenue.
                    </div>
                <?php
                }
                ?>
                <div class="mb-3">
                    <label class="form-label" for="title">Titre</label><br />
                    <input class="form-control" type="text" name="title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="resume">Résumé</label><br />
                    <textarea class="form-control" name="resume" rows="3" cols="33" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nbParagraphes">Nombre de paragraphe(s)</label><br />
                    <input class="form-control" id="nbParagraphes" type="number" name="nbParagraphes" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="couverture">Couverture</label><br />
                    <input class="form-control" type="file" name="couverture" accept="image/*" required />
                </div>
                <div class="text-center mb-2 mt-5">
                    <input class="btn btn-sm me-2 btnRouge p-2 pe-3 ps-3" type="submit" value="Créer" />
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>