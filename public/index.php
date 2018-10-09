<?php
    use Core\App;

    require '../app/autoload.php';

    require '../app/routes.php';

    $ruta = realpath(__DIR__ . '/../');

    $app = new App($ruta);