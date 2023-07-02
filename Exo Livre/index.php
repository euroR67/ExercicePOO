<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php

            // Importation des fichier complémentaire PHP.
            require 'Auteur.php';
            require 'Livre.php';

            // Création d'un objet Auteur
            $stephenK = new Auteurs("Stephen", "King");
            $stephenA = new Auteurs("Stephen", "Aing");

            // Création d'un tableau d'objets Livre
                new Livre("Ca", 1986, 1138, 20, $stephenK);
                new Livre("Simetierre", 1983, 374, 15, $stephenK);
                new Livre("leFleau", 1978, 823, 14, $stephenK);
                new Livre("Shining", 1977, 447, 16, $stephenK);

            // Affichage de la bibliographie de l'auteur
            $stephenK->afficherBibliographie();
        ?>

    </body>
</html>