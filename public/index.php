<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необхідна версія PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';
require_once CORE . '/redbeanphp/rb-mysql.php';
require_once CONFIG . '/database.php';
require_once VIEW . '/view.php';

DEBUG ? error_reporting(-1) : error_reporting(0);


echo 'hello world';