<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Inscription</title>
</head>

</body>

<?php
require("includes/navbar.php");
?>


<section class="vh-100 align-items-center">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" id="formulaire">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px; ">
            <div class="card-body p-2">
              <h2 class="text-uppercase text-center mb-2 pt-1">CREER UN COMPTE</h2></br>

              <form>
                <div class="form-outline w-75 ms-3 mb-2">
                  NOM
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg " />
                  <label class="form-label" for="form3Example1cg"></label>
                </div>

                <div class="form-outline w-100 mb-2">
                  E-MAIL
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg"></label>
                </div>

                <div class="form-outline w-100 mb-2">
                  MOT DE PASSE
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg"></label>
                </div>

                <div class="form-outline w-100 mb-2">
                  CONFIRMER VOTRE MOT DE PASSE
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg"></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button" class="btn-hover color-11">S'INSCRIRE</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Déja inscrit? <a href="#!" class="fw-bold text-body"><u>Connecte toi ici!</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="buttons">
  <button class="btn-hover color-1">BUTTON</button>
  <button class="btn-hover color-2">BUTTON</button>
  <button class="btn-hover color-3">BUTTON</button>
  <button class="btn-hover color-4">BUTTON</button>
  <button class="btn-hover color-5">BUTTON</button>
  <button class="btn-hover color-6">BUTTON</button>
  <button class="btn-hover color-7">BUTTON</button>
  <button class="btn-hover color-8">BUTTON</button>
  <button class="btn-hover color-9">BUTTON</button>
  <button class="btn-hover color-10">BUTTON</button>
  <button class="btn-hover color-11">BUTTON</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>