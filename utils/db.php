<?php

function dbConnect() {
    $db = new PDO('mysql:host=localhost; dbname=animanails', 'admin', 'admin');
    return $db;
}