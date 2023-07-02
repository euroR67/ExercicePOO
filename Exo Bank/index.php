<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte bancaire</title>
</head>
<body>
    <?php 
        require 'Compte.php';
        require 'Titulaire.php';
        
        $mchamaev = new Titulaire("Mansour", "Chamaev", "20-06-1997", "Strasbourg");
        $baliev = new Titulaire("Baisangour", "Aliev", "29-07-1997", "Strasbourg");

        new Compte("Compte courant", 529.20, "€" , $mchamaev);
        new Compte("Livret A", 100, "euro" , $mchamaev);

        $mchamaev->afficherTitulaire();
        echo "Age : " . $mchamaev->getAge();
    ?>
</body>
</html>