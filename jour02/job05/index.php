<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Fonction pour vérifier si un nombre est premier
    function isPrime($number){
    //boucle de 2 au nombre à tester
        for ($i = 2; $i < $number; $i++) {
            //test du quotien de la division
            if ($number % $i == 0) {
                return FALSE;
            }
        }
    
        //Aucun diviseur trouvé, c'est un nombre permier
        return TRUE;
    }
    
    // boucle de 0 à 1000
    echo 'Nombre premier de 0 à 1000: '. '<br />';
    for ($i = 3; $i < 1000; $i++) {
        if (isPrime($i)) {
            echo $i . '<br />';}
    }
        ?>
</body>

</html>