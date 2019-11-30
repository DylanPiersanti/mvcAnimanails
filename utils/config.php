<?php 
require_once('db.php');

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
