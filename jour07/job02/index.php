<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function bonjour($jour)
    {
        if( $jour === true ) { echo "Bonjour"; }
        if( $jour === false ) { echo "Bonsoir"; }
    
    }
    bonjour(true);
    bonjour(false);
    
    ?>
</body>

</html>