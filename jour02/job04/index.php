<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    for( $i = 1; $i <= 100; $i++ ) {
    if($i % 3 == 0 && $i % 5 == 0)  //si le nombre est multiple de 3 et de 5
        echo "FizzBuzz" . '<br />';
    elseif($i % 3 == 0)   //si le nombre est multiple de 3
        echo "Fizz". "<br />";
    elseif($i % 5 == 0)   //si le nombre est multiple de 5
        echo "Buzz". "<br />";
    else        // afficher normalement 
        echo $i . '<br />';
    }
    ?>
</body>

</html>