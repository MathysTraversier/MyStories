<?php
session_start();
?>

<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="myStories">
            <img src="images\th-removebg-preview 1.png" alt="" width="60" height="40" class="d-inline-block align-text">
            MyStories
        </a>
        <?php
        if (!isset($_SESSION['user'])) {
        ?>
            <div class="navbar-right">
                <a class="btn btn-sm me-2" id="btnInscription" href="inscription.php" type="button">S'inscrire</a>
                <a class="btn btn-sm btnRouge" href="connexion.php" type="button">Se connecter</a>
            </div>
        <?php
        } else {
        ?>
            <div class="nav-item dropdown" id="navbar-collapse-target">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> </span><?= $_SESSION['user'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>
    </div>
</nav>