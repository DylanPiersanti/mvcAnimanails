<?php
    require_once('utils/db.php');

    function getActiveNews() {
        $db = dbConnect();
        $req = 'SELECT * FROM news WHERE active = 1';
        $stmt = $db->prepare($req);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }