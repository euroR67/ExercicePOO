<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Livres de Stephen King </h2><br>
    <?php
        require 'Auteur.php';
        require 'Livre.php';
        $ca->infoLivre();
        $simetierre->infoLivre();
        $leFleau->infoLivre();
        $Shining->infoLivre();
    ?>
</body>
</html>