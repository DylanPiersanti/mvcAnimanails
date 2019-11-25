<?php
if (!isset($_GET['path']) || !$_GET['path']) {
    require('views/home.php');
} else {
    switch ((string) $_GET['path']) {
        case 'tarifs':
            require('controllers/tarifs.php');
            tarifsList();
            break;
        default:
            require('views/404.php');
    }
}
