<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            // Liaison de tout les fichier php
            spl_autoload_register(function ($class_name) {
                require_once $class_name . '.php';
            });


            $realisateur1 = new Realisateur("Jack Chirak");

            $genre1 = new Genre("Science Fiction");

            $film1 = new Film("Batman","19-06-2006", 120, $genre1, $realisateur1);

            // print_r($film1);
        ?>
    </body>
</html>