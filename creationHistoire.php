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

    if (isset($_GET['creation'])) {
        $_SESSION['creation'] = 1;
    }

    if ($_SESSION['creation'] == 3 || $_SESSION['creation'] == 4) {
        $requete = "SELECT * FROM step where sto_id = ?";
        $response = $bdd->prepare($requete);
        $response->execute(array($_SESSION['storyID']));
        $steps = $response->fetchAll();
    }

    if ($_SESSION['creation'] == 4) {
        $requete = "SELECT * FROM choice where sto_id = ?";
        $response = $bdd->prepare($requete);
        $response->execute(array($_SESSION['storyID']));
        $choices = $response->fetchAll();
    }

    if ($_SESSION['creation'] == 1) { //on affiche une page différente selon l'étape de création de l'histoire.
    ?>
        <div class="container mt-5 mb-5">
            <div id="pageCreation" class="card page p-5">
                <h3 class="titrePage text-center">SAISIR UNE NOUVELLE HISTOIRE</h3>
                <form method="POST" action="traitement/ajoutHistoireBDD.php" enctype="multipart/form-data">
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
                        <input class="form-control" type="file" name="couverture" accept="image/*" />
                    </div>
                    <div class="text-center mb-2 mt-5">
                        <input class="btn btn-sm me-2 btnRouge p-2 pe-3 ps-3" type="submit" value="Créer" />
                    </div>
                </form>
            </div>
        </div>
    <?php
    } else if ($_SESSION['creation'] == 2) {
    ?>
        <div class="container mt-5 mb-5">
            <div id="pageCreation" class="card page p-5">
                <h3 class="titrePage text-center">SAISIR UNE NOUVELLE HISTOIRE</h3>
                <h4 class="text-center">CRÉATION DES PARAGRAPHES</h4>
                <form method="POST" action="traitement/ajoutParagraphesBDD.php" enctype="multipart/form-data">
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
                    if (isset($_SESSION['nbParagraphes'])) {
                        for ($i = 1; $i <= $_SESSION['nbParagraphes']; $i++) {
                        ?>
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="paragraphe<?= $i ?>">Paragraphe <?= $i ?></label><br />
                                        <textarea class="form-control" name="paragraphe<?= $i ?>" rows="3" cols="33" required></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label class="form-label" for="start<?= $i ?>">Début de l'histoire : </label>
                                    </div>
                                    <div class="col text-end">
                                        <input type="radio" name="start<?= $i ?>" value=1 required />
                                        <label class="form-label" for="oui">Oui</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="start<?= $i ?>" value=0 />
                                        <label class="form-label" for="non">Non</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="lossPV<?= $i ?>">Perte de PV : </label>
                                    </div>
                                    <div class="col text-end">
                                        <input type="radio" name="lossPV<?= $i ?>" value=1 required />
                                        <label class="form-label" for="oui">Oui</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="lossPV<?= $i ?>" value=0 />
                                        <label class="form-label" for="non">Non</label><br />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="storyEnd<?= $i ?>">Fin de l'histoire : </label>
                                    </div>
                                    <div class="col text-end">
                                        <input type="radio" name="storyEnd<?= $i ?>" value=1 required />
                                        <label class="form-label" for="oui">Oui</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="storyEnd<?= $i ?>" value=0 />
                                        <label class="form-label" for="non">Non</label><br />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="victory<?= $i ?>">Victoire : </label>
                                    </div>
                                    <div class="col text-end">
                                        <input type="radio" name="victory<?= $i ?>" value=1 required />
                                        <label class="form-label" for="oui">Oui</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" name="victory<?= $i ?>" value=0 />
                                        <label class="form-label" for="non">Non</label>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="text-center mb-2 mt-5">
                        <input class="btn btn-sm me-2 btnRouge p-2 pe-3 ps-3" type="submit" value="Créer" />
                    </div>
                </form>
            </div>
        </div>
    <?php
    } else if ($_SESSION['creation'] == 3) {
    ?>
        <div class="container mt-5 mb-5">
            <div id="pageCreation" class="card page p-5">
                <h3 class="titrePage text-center">SAISIR UNE NOUVELLE HISTOIRE</h3>
                <h4 class="text-center">CRÉATION DES CHOIX</h4>
                <form method="POST" action="traitement/ajoutChoixBDD.php" enctype="multipart/form-data">
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
                    for ($i = 1; $i <= $_SESSION['compteurPara']; $i++) {
                    ?>
                        <div class="row mt-5">
                            <div class="col-11">
                                <label class="form-label" for="paragrapheDepart">Sélection du paragraphe de départ <?= $i ?></label><br />
                                <select class="form-select" aria-label="Default select example" name="paragrapheDep<?= $i ?>">
                                    <option selected>Sélectionnez un paragraphe</option>
                                    <?php
                                    foreach ($steps as $step) {
                                    ?>
                                        <option value=<?= $step['ste_id'] ?>><?= $step['ste_description'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-1">
                                <a class="admin" href="traitement/addParaChoice.php?id=3"><i class="bi bi-trash-fill ms-2"></i></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="traitement/addParaChoice.php?id=1" class="btn btn-sm me-2 btnRouge">Paragraphe supplémentaire</a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <p>Saisie des choix associés</p>
                        <?php
                        for ($i = 1; $i <= $_SESSION['compteurChoix']; $i++) {
                        ?>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="choix<?= $i ?>" placeholder="Choix <?= $i ?>" />
                                    <a class="admin" href="traitement/addParaChoice.php?id=4"><i class="bi bi-trash-fill ms-2"></i></a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="row mt-4">
                            <div class="col">
                                <a href="traitement/addParaChoice.php?id=2" class="btn btn-sm me-2 btnRouge">Choix supplémentaire</a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-5">
                            <input type="submit" name="envoyer" class="btn btn-sm me-2 btnRouge" value="Continuer à saisir mes choix" />
                        </div>
                        <div class="col-3">
                            <input type="submit" name="suivant" class="btn btn-sm me-2 btnRouge" value="Étape suivante" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php
    } else if ($_SESSION['creation'] = 4) {
    ?>
        <div class="container mt-5 mb-5">
            <div id="pageCreation" class="card page p-5">
                <h3 class="titrePage text-center">SAISIR UNE NOUVELLE HISTOIRE</h3>
                <h4 class="text-center">MISE EN RELATION DES CHOIX ET DES PARAGRAPHES</h4>
                <form method="POST" action="traitement/relation.php" enctype="multipart/form-data">
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
                    <div class="row mt-5">
                        <div class="col">
                            <label class="form-label" for="choix">Choix</label><br />
                            <select class="form-select" aria-label="Default select example" name="choix" required>
                                <option selected>Sélectionnez un choix</option>
                                <?php
                                foreach ($choices as $choice) {
                                ?>
                                    <option value=<?= $choice['cho_id'] ?>><?= $choice['cho_description'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="form-label" for="choix">En relation avec </label><br />
                            <select class="form-select" aria-label="Default select example" name="choixRelie">
                                <option value="null" selected>Aucun choix</option>
                                <?php
                                foreach ($choices as $choice) {
                                ?>
                                    <option value=<?= $choice['cho_id'] ?>><?= $choice['cho_description'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="form-label" for="paragrapheArr">Paragraphe d'arrivée </label><br />
                            <select class="form-select" aria-label="Default select example" name="paragrapheArr">
                                <option selected>Sélectionnez un paragraphe d'arrivée</option>
                                <?php
                                foreach ($steps as $step) {
                                ?>
                                    <option value=<?= $step['ste_id'] ?>><?= $step['ste_description'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row text-center mt-5">
                        <div class="col">
                            <input type="submit" class="btn btn-sm me-2 btnRouge" value="Envoyer" />
                        </div>
                    </div>
                </form>
                <div class="row text-end mt-5">
                    <div class="col">
                        <a href="index.php" class="btn btn-sm me-2 btnRouge">Terminer la création</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>