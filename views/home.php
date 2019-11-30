<?php
$title = "Accueil";
ob_start();
?>

<main>

    <?php include('includes/carousel.php') ?>

    <?php foreach ($news as $activeNews) { ?>

    <div class="row" style="width: 100%;">
        <div class="col-ms-12 col-lg-6 ">
            <div class="content-img">
                <img src="<?= $activeNews['image'] ?>" />
            </div>
        </div>
        <div class="col-ms-12 col-lg-6 ">
            <div class="content-text">
                <h1><?= $activeNews['title'] ?></h1>
                <p>
                <?= $activeNews['texte'] ?>
                </p>
                <a href="#" class="btn btn-dark">Lire la suite</a>
            </div>
        </div>
    </div>

    <?php } ?>

</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>