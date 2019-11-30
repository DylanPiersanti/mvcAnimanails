<?php
    require('models/news.php');

    function showActiveNews() {
        $news = getActiveNews();
        require('views/home.php');
    }