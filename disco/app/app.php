<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../CD.php";

    $app = new Silex\Application();

    $app->get("/", function(){
        return "HOME";
    })

    return $app;

?>
