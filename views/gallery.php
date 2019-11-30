<?php
$title = "Titre de la page";
ob_start();
?>

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/PUeaHfC.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/uX3g4Nl.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/8cOtAS9.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/p7OYoBT.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/uZeTibF.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/ymwlLln.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/PUeaHfC.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
            <img src="http://i.imgur.com/A8FRrbS.png" alt="" />
            <div class="portfolio_images_overlay text-center">
                <h6 class="clrd-font">Italian Source Mushroom</h6>
                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
require('public/index.php');
?>