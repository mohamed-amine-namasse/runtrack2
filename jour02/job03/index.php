<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    for( $i = 0; $i <= 100; $i++ ) {
    if(0<$i && $i<20)    //si i est entre 0 et 20 le mettre en italique
        echo "<i>$i</i>". "<br />";
    elseif(25<$i && $i< 50 && $i!=42)  //si i est entre 25 et 50 le mettre souligné
        echo "<u>$i</u>". "<br />";
    elseif($i==42)  //si i égal à 42 écrire “La Plateforme_” 
        echo "La Plateforme_" . '<br />';
    else        // afficher normalement si différent de 42
        echo $i . '<br />';
    }
    ?>
</body>

</html>