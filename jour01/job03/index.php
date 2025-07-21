<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var_bool="true"; // variable boolean
    $a=1234;// entier
    $str="hello world"; // chaine de caractère
    $nbr=25.33; // nombre à virgule flottante
    echo "\$var_bool:";
    echo $var_bool;
    echo "<br>";
    echo "\$a:";
    echo $a;
    echo "<br>";
    echo "\$str:";
    echo $str;
    echo "<br>";
    echo "\$nbr:";
    echo $nbr;
    echo "<br>";
    /*
    $tableau=array(
        true,25,"une phrase",3.14
    );
     */
    $tableau=array(
        $var_bool,$a,$str,$nbr
    );
    echo "
    <table>
    <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
    </tr>
    <tr>
    <td>boolean</td>
    <td>\$var_bool</td>
    <td>$tableau[0]</td>
    </tr>
    <tr>
    <td>entier</td>
    <td>\$a</td>
    <td>$tableau[1]</td>
    
    </tr>
    <tr>
    <td>chaine de caractère</td>
    <td>\$str</td>
    <td>$tableau[2]</td>

    </tr>
    
    <tr>
    <td>nombre à virgule flottante</td>
    <td>\$nbr</td>
    <td>$tableau[3]</td>
    </tr>
    </table>
 ";
    ?>

</body>

</html>