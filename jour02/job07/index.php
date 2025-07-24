<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Définir les dimensions du triangle
    $hauteur = 5;
    
    // Boucle pour chaque ligne du triangle
    for ($i = 1; $i <= $hauteur; $i++) {
        // Afficher les espaces pour centrer le triangle 
        for ($j = 1; $j <= $hauteur - $i; $j++) {
            echo "&nbsp;&nbsp";
        }
        // Afficher les étoiles
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        // Aller à la ligne suivante
        echo "<br/>";
    }
        ?>
</body>

</html>