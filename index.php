<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h2>Livres de Stephen King </h2><br> -->
    <?php
        require 'Auteur.php';
        require 'Livre.php';



        
        $ca = new Livre("Ca", 1986 , 1138, 20);
        $simetierre = new Livre("simetierre", 1983 , 374, 15);
        $leFleau = new Livre("leFleau", 1978 , 823, 14);
        $Shining = new Livre("Shining", 1977 , 447, 16);

        $ca->infoLivre();
        $simetierre->infoLivre();
        $leFleau->infoLivre();
        $Shining->infoLivre();
    ?>
</body>
</html>