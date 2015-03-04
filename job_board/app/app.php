<?php

    require_once __DIR__."/../vendor/autoload.php";
    //require_once __DIR__."/../src/JobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function(){

        return "
        <!DOCTYPE html>
        <html>
            <head>
                <title>Job POsting</title>
            </head>
            <body>
                <div>
                <form action='/posting'>
                <label for='title'>Job Title</label>
                <input id='title' name='title' type='any'>
                <label for='description'>Job Description</label>
                <input id='description' name='description' type='any'>
                <label for='contact'>Contact</label>
                <input id='contact' name='contact' type='any'>
                <button type='submit'>Submit</button>
                </form>

                </div>

            </body>
        </html>

        ";
    });

    $app->get("/posting", function(){

        $descri = $_GET["description"];
        $cont = $_GET["contact"];
        $tit = $_GET["title"];

        echo "<p>$descri</p>";
        echo "<p>$cont</p>";

        echo "<p>$tit</p>";

    });



    return $app;

?>
