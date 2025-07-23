<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="Certaines choses changent, et d'autres ne changeront jamais.";
    $longueur = strlen($str); // longueur de la chaine de caractère
    
    $p_lettre=$str[0]; // on stocke la première lettre
    for ($i= 0; $i<$longueur-1; $i++) { //boucle pour remplacer chaque lettre par celle qui la suit
        
        $str[$i] = $str[$i+1];
    }
    $new_str=substr_replace($str,$p_lettre,$longueur-1,0);
    echo $new_str;
    
    ?>
</body>

</html>