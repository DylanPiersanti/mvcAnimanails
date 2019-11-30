<?php
    

    if (isset($_POST['sumbmitNewsLetter'])) {
        $newsletter = $_POST['newsletter'];
        require_once('db.php');
        $db = dbConnect();
        $req = 'INSERT INTO `newsletter`(`id`, `mail`) VALUES (NULL, :mail)';
       
        $stmt = $db->prepare($req);
        $stmt->bindParam(':mail', $newsletter, PDO::PARAM_STR);
        $stmt->execute();
    } else {

    }