<?php
    require_once('utils/db.php');

    function getGallery() {
        $db = dbConnect();
        $req = 'SELECT * FROM gallery';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }