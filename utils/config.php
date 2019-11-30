<?php 
require_once('db.php');

// General config
function allConfig() {
    $db = dbConnect();
    $req = 'SELECT * FROM infos';
    $stmt = $db->prepare($req);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$config = allConfig();

$mail = $config['mail'];
$phone = $config['phone'];
$facebook = $config['fb'];
$instagram = $config['insta'];
$description = $config['desc'];
$logo = $config['logoImg'];


// Carousel images
function carouselImg() {
    $db = dbConnect();
    $req = 'SELECT * FROM carousel';
    $stmt = $db->prepare($req);
    $stmt->execute();

    return $stmt->fetch();
}

$carousel = carouselImg();
