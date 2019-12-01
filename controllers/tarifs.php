<?php
    require('models/tarifs.php');
    
    function showTarifs() {
        $naturalTarifs = getNaturalTarifs();
        $remplTarifs = getRemplTarifs();
        $rallTarifs = getRallTarifs();
        $deposeTarifs = deposesTarifs();
        $decosTarifs = decosTarifs();
        $tarifsList = getAllTarifs();
        $products = getProducts();
        require('views/tarifs.php');
    }