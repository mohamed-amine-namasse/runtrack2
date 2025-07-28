<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calcule($a, $operation, $b) {
    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            if ($b == 0) {
                return "Erreur : division par zéro.";
            }
            return $a / $b;
        case "%":
            if ($b == 0) {
                return "Erreur : modulo par zéro.";
            }
            return $a % $b;
        default:
            return "Opération inconnue.";
    }
    }
    echo calcule(5,"+",6);
    echo calcule(7,"-",6);
    echo calcule(5,"*",6);
    echo calcule(5,"/",5);
    echo calcule(4,"%",2);
   
    ?>
</body>

</html>