<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Connexion</title>
</head>

<body>
  <?php
  require("includes/navbar.php");
  ?>
  <section class="vh-100 align-items-center">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card formulaireConnexion mt-0" style="border-radius: 15px;">
              <div class="card-body p-2">
                <h2 class="text-uppercase text-center mb-2 pt-1">CONNEXION</h2></br>

                <form method="POST" action="verification.php">

                  <?php
                  if (isset($_GET['erreur']) && $_GET['erreur'] == 1) {
                  ?>
                    <div class="form-outline w-75 mx-auto mb-2 text-center text-danger">
                      Identifiant ou mot de passe incorrect.
                    </div>
                  <?php
                  }
                  ?>

                  <div class="form-outline w-75 mx-auto mb-2">
                    E-MAIL
                    <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg"></label>
                  </div>


                  <div class="form-outline w-75 mx-auto mb-2">
                    MOT DE PASSE
                    <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg"></label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <input class="btn btn-sm me-2" id="btnValidate" type="submit" value="SE CONNECTER" />
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Pas encore inscrit? <a href="inscription.php" class="fw-bold text-body">Inscris-toi ici!</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>