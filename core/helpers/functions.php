<?php

function pp($arg, $die = 0) {
    echo '<pre>'. print_r($arg, true) . '</pre>';
    if ($die) die;
}

function abort($code = 404) {
    http_response_code(404);
    if (file_exists(VIEW . "/errors/{$code}/{$code}.php")) {
        require_once VIEW . "/errors/{$code}/{$code}.php";
        die;
    } else {
        echo '<h2>'. "OOOPS page not found {$code}" . '</h2>';
    }

}