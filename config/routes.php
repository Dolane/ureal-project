<?php

$uri = trim($_SERVER['REQUEST_URI'], '/');

    if ($uri === '') {
        require_once WWW . '/Views/view.php';
        require_once WWW .  '/Views/parts/header.php';
        require_once WWW .  '/Views/parts/footer.php';
        require_once WWW .  '/Views/parts/sidebar.php';
    } else {
       abort();
    }