<?php
    require('models/tarifs.php');
    
    function showTarifs() {
        $naturalTarifs = getNaturalTarifs();
        $remplTarifs = getRemplTarifs();
        $rallTarifs = getRallTarifs();
        $deposeTarifs = deposesTarifs();
        $decosTarifs = decosTarifs();
        $tarifsList = getAllTarifs();
        require('views/tarifs.php');
    }