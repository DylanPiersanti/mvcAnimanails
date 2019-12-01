<?php
require('models/gallery.php');

function showGallery()
{
        $gallery = getGallery();
        require('views/gallery.php');
}
