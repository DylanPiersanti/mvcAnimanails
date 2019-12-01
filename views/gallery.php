<?php
$title = "Titre de la page";
ob_start();
?>

<div class="container">
    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Mon portfolio</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left galleryImg">
    <?php foreach ($gallery as $gallery) { ?>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?= $gallery['img_link'] ?>" alt="">
            </a>
        </div>
    <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require('public/index.php');
?>