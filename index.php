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

        // Création d'objects Livres
        $ca = new Livre("Ca", 1986 , 1138, 20);
        $simetierre = new Livre("simetierre", 1983 , 374, 15);
        $leFleau = new Livre("leFleau", 1978 , 823, 14);
        $Shining = new Livre("Shining", 1977 , 447, 16);

        // Affichage info a propos de l'auteur et ses livres
        $stephenK->biographyAuteur();
        $ca->infoLivre();
        $simetierre->infoLivre();
        $leFleau->infoLivre();
        $Shining->infoLivre();
    ?>
</body>
</html>