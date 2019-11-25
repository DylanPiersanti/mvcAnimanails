<?php
    require('models/tarifs.php');
    

    function teamsList() {
        $selectTeams = getTarifs();
        require('views/tarifs.php');
    }