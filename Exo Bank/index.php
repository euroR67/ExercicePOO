<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte bancaire</title>
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        require 'Compte.php';
        require 'Titulaire.php';
        
        $mchamaev = new Titulaire("Mansour", "Chamaev", "20-06-1997", "Strasbourg");

        new Compte("Compte courant", 529.20, "€" , $mchamaev);
        new Compte("Livret A", 100, "€" , $mchamaev);
        
        $mchamaev->getCompte()[0]->crediter(200); // Créditer le compte courant
        $mchamaev->getCompte()[1]->crediter(50);  // Créditer le livret A
        $mchamaev->getCompte()[0]->virement($mchamaev->getCompte()[1], 120);
        $mchamaev->getCompte()[1]->virement($mchamaev->getCompte()[0], 100);
        $mchamaev->getCompte()[1]->virement($mchamaev->getCompte()[0], 180);
        $mchamaev->getCompte()[1]->debiter(180);  // Créditer le livret A
        $mchamaev->afficherTitulaire();
        
    ?>
</body>
</html>