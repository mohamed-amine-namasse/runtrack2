<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="Les choses que l'on possede finissent par nous posseder";
    $longueur = strlen($str); // longueur de la chaine de caractère
    // boucle pour parcourir la chaine de caractère à l'envers
    for ($i= $longueur-1; $i>=0; $i--) {
        echo $str[$i];       
    }
    
    ?>
</body>

</html>