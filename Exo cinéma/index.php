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

            $genre1 = new Genre("Science Fiction");
            $genre2 = new Genre("Roman");
            
            $role1 = new Role("Batman");
            $role2 = new Role ("Superman");

            $realisateur1 = new Realisateur("Jack" , "Montserra", "Homme", "11-02-1968");
            $realisateur2 = new Realisateur("Steven", "Miller", "Homme", "01-12-1988");
            
            $film1 = new Film("Batman","19-06-2006", 120, $genre1, $realisateur1);
            $film2 = new Film("Superman", "12-01-2015", 140, $genre2, $realisateur2);
            
            $acteur1 = new Acteur("Michael", "Keaton", "Homme", "19-06-1992");
            $acteur2 = new Acteur("Brad", "Pit", "Homme" , "28-07-1976");
            $acteur3 = new Acteur("Val", "Kilmer", "Homme", "10-09-2000");

            $jouer1 = new Jouer($acteur1, $role1, $film1);
            $jouer2 = new Jouer($acteur2, $role2, $film2);
            $jouer3 = new Jouer($acteur3, $role1, $film1);

            $film1->casting();
            $acteur1->filmographie();
            $genre1->contenir();
            $role1->incarnation();
            $realisateur1->realisation();

            $film2->casting();
            $acteur2->filmographie();
            $genre2->contenir();
            $role2->incarnation();
            $realisateur1->realisation();
        ?>
    </body>
</html>