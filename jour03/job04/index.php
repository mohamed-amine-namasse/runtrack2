<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="Dans l'espace, personne ne vous entend crier";
    
    $longueur = 0; //compteur mis à 0 de la longueur de la chaine

    // Parcours de chaque caractère dans la chaîne
    for ($i = 0; $i < strlen($str); $i++) {
        $longueur++;
    }

    // Affichage du résultat
    echo "Le nombre de caractères dans la chaîne est : " . $longueur;
    ?>
</body>

</html>