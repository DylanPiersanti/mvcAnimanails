<?php require('./utils/config.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=720, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/css/all.min.css" rel="stylesheet">
    <link href="./public/css/style.css" rel="stylesheet">
    <title><?= "Animanail's - $title" ?></title>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg social-navbar ">
        <div class="container">
            <a class="navbar-brand" href="tel:<?= $phone ?>">Tél : <?= $phone ?></a>
            <div class="d-flex flex-row order-2 order-lg-3">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item"><a class="nav-link px-2" href="<?= $facebook ?>"><span class="fab fa-facebook-f"></span></a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="<?= $instagram ?>"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light bg-light menu-navbar">
        <div class="container">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?path=tarifs">Tarifs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galerie</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="#"><img class="logo" src="<?= $logo ?>" /></a>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <div class="row">

                <div class="col-md-3 mb-md-0 mb-3">

                </div>

                <div class="col-md-6 mb-4">
                    <img class="footerLogo" src="<?= $logo ?>" />
                    <hr>
                    <form class="input-group" action="./" method="post">
                        <input name="newsletter" type="mail" class="form-control form-control-sm newsletter" placeholder="S'inscrire a la newsletter" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button name="sumbmitNewsLetter" class="btn btn-dark btn-outline-white my-0" type="sumbit">S'inscrire</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#" class="nav-item"> animanails.fr</a>
        </div>

    </footer>

    <script src="./public/jquery/jquery.min.js"></script>
    <script src="./public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>