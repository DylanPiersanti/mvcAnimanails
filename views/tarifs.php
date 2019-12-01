<?php
$title = "Titre de la page";
ob_start();
?>

<div class="col-md-10 my-4 mx-auto">
    <h2 class="text-center display-4">Table de tarifs</h2>

    <hr>
    <div class="row no-gutters my-3">
        <div class="col-md-6 pr-2">
            <div class="list-group text-center my-3">
                <div class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Ongles naturels</h4>
                </div>
                <?php foreach ($naturalTarifs as $naturel) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $naturel['type'] ?></span>
                        <span class="price"><?php echo $naturel['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Sign-up</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Rallongements<br></h4>
                </div>
                <?php foreach ($rallTarifs as $rall) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $rall['type'] ?></span>
                        <span class="price"><?php echo $rall['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item bg-inverse">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Buy Now</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6 pl-2">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Remplissages</h4>
                </div>
                <?php foreach ($remplTarifs as $remp) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $remp['type'] ?></span>
                        <span class="price"><?php echo $remp['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Contact Us</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6 pl-2">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Déposes</h4>
                </div>
                <?php foreach ($deposeTarifs as $depose) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $depose['type'] ?></span>
                        <span class="price"><?php echo $depose['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Contact Us</button>
                    </div> -->
            </div>
        </div>
    </div>
    <div class="col-12 decoPrice">
        <span>Décos <b>GRATUITES</b> (strass, spiderGel, paillettes, ...)</span> <br />
        <?php foreach ($decosTarifs as $decoPrice) { ?>
            <span><b><?php echo $decoPrice['type'] ?></b> ....... <?php echo $decoPrice['tarifs'] . ' €' ?></span>
        <?php } ?>
    </div>

    <hr>
</div>

<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="card">
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Les produits
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <h1 class="font-weight-bold text-center text-lg-left mt-4 mb-0">Les produits</h1>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-left galleryImg">
                            <?php foreach ($products as $products) { ?>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="#" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="<?= $products['img_link'] ?>" alt="">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>

<?php
$content = ob_get_clean();
require('public/index.php');
?>