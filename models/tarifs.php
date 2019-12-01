<?php
    require_once('utils/db.php');

    function getAllTarifs() {
        $db = dbConnect();
        $tarif_req = 'SELECT * FROM tarifs';
        $stmt = $db->prepare($tarif_req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    function getNaturalTarifs() {
        $db = dbConnect();
        $req = 'SELECT * FROM tarifs WHERE categorie = "naturel"';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getRemplTarifs() {
        $db = dbConnect();
        $req = 'SELECT * FROM tarifs WHERE categorie = "remplissage"';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getRallTarifs() {
        $db = dbConnect();
        $req = 'SELECT * FROM tarifs WHERE categorie = "rallongement"';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function deposesTarifs() {
        $db = dbConnect();
        $req = 'SELECT * FROM tarifs WHERE categorie = "deposes"';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function decosTarifs() {
        $db = dbConnect();
        $req = 'SELECT * FROM tarifs WHERE categorie = "decos"';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProducts() {
        $db = dbConnect();
        $req = 'SELECT * FROM products';
        $stmt = $db->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }