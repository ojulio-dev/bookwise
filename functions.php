<?php

function view($view) {

    require 'views/template/app.php';

}

function dd(...$dump) {

    echo '<pre>';

    var_dump($dump);

    die();

    echo '</pre>';

}

function abort($code) {

    http_response_code($code);

    view($code);

    die();

}