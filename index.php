<?php
if (!isset($_GET['path']) || !$_GET['path']) {
    //require('views/home.php');
    require('controllers/news.php');
    showActiveNews();
} else {
    switch ((string) $_GET['path']) {
        case 'tarifs':
            require('controllers/tarifs.php');
            showTarifs();
            break;
        case 'home':
            require('controllers/news.php');
            showActiveNews();
            break;
        default:
            require('views/404.php');
    }
}
