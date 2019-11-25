<?php
$title = "Accueil";
ob_start();
?>

<main>

    <?php include('includes/carousel.php') ?>

    <div class="row" style="width: 100%;">
        <div class="col-ms-12 col-lg-6 ">
            <div class="content-img">
                <img src="./public/images/news/img1.jpg" />
            </div>
        </div>
        <div class="col-ms-12 col-lg-6 ">
            <div class="content-text">
                <h1>Titre de la news</h1>
                <p>
                    Contenu de la news
                </p>
                <a href="#" class="btn btn-dark">Lire la suite</a>
            </div>
        </div>
    </div>

</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>