<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for( $i = 1; $i < 1337; $i++ ) {
    if($i==42)    //si i est egal à 42 le mettre en gras et souligné
        echo "<u><b>$i</b></u>". "<br />";
    else    //si i est different de 42 afficher normalement
       echo $i . "<br />";
    }
    ?>
</body>

</html>