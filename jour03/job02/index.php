<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $longueur = strlen($str); // longueur de la chaine de caractère
    for ($i= 0; $i<$longueur; $i++) {
        echo $str[$i];
        $i++;        //on incrémente comme ça on saute une lettre 
    }
    ?>
</body>

</html>