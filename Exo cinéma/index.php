<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
    <style>
        * {
            font-family: sans-serif;
            font-size: 24px;
        }
    </style>
</head>
    <body>
        <?php
            // Liaison de tout les fichier php
            spl_autoload_register(function ($class_name) {
                require_once $class_name . '.php';
            });

<<<<<<< HEAD
            // Création d'objet Genre pour catégoriser les films
            $genre1 = new Genre("Science Fiction");
            $genre2 = new Genre("Roman");
            
            // Création de role pour différent personnage
            $role1 = new Role("Batman");
            $role2 = new Role ("Superman");

            // Création d'objet a partir de la class Realisateur, définition des infos du realisateur
            $realisateur1 = new Realisateur("Jack" , "Montserra", "Homme", "11-02-1968");
            $realisateur2 = new Realisateur("Steven", "Miller", "Homme", "01-12-1988");
            
            // Création d'objet a partir de la class Film, objet contenant les info du film en assignant une catégorie ainsi que son réalisateur
            $film1 = new Film("Batman","19-06-2006", 120, $genre1, $realisateur1);
            $film2 = new Film("Superman", "12-01-2015", 140, $genre2, $realisateur2);
            
            // Création d'objet a partir de la class Acteur, définition des infos de l'acteur
=======
            $genre1 = new Genre("Science Fiction");
            $genre2 = new Genre("Roman");
            
            $role1 = new Role("Batman");
            $role2 = new Role ("Superman");

            $realisateur1 = new Realisateur("Jack" , "Montserra", "Homme", "11-02-1968");
            $realisateur2 = new Realisateur("Steven", "Miller", "Homme", "01-12-1988");
            
            $film1 = new Film("Batman","19-06-2006", 120, $genre1, $realisateur1);
            $film2 = new Film("Superman", "12-01-2015", 140, $genre2, $realisateur2);
            
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
            $acteur1 = new Acteur("Michael", "Keaton", "Homme", "19-06-1992");
            $acteur2 = new Acteur("Brad", "Pit", "Homme" , "28-07-1976");
            $acteur3 = new Acteur("Val", "Kilmer", "Homme", "10-09-2000");

<<<<<<< HEAD
            // Création d'un objet apartir de la class Jouer qui permet de faire une liaison entre un acteur son role et dans quel film il a jouer
            // ainsi pour alimenter leur tableau respective
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
            $jouer1 = new Jouer($acteur1, $role1, $film1);
            $jouer2 = new Jouer($acteur2, $role2, $film2);
            $jouer3 = new Jouer($acteur3, $role1, $film1);

<<<<<<< HEAD

            // la methode casting affiche quel acteur a incarnée un personnage
            $film1->casting();
            // la methode filmographie affiche les films dans lequel a jouer un acteur
            $acteur1->filmographie();
            // la methode contenir affiche les film que contiens une catégorie
            $genre1->contenir();
            // la methode incarnation affiche quels acteur ont incarné le role de d'un personnage
            $role1->incarnation();
            // la methode realisation affiche quels films ont été réaliser par un réalisateur
=======
            $film1->casting();
            $acteur1->filmographie();
            $genre1->contenir();
            $role1->incarnation();
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
            $realisateur1->realisation();

            $film2->casting();
            $acteur2->filmographie();
            $genre2->contenir();
            $role2->incarnation();
            $realisateur1->realisation();
        ?>
    </body>
</html>