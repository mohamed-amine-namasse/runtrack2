<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="On n’est pas le meilleur quand on le croit mais quand on le sait";
    // dictionnaire avec consonnes,voyelles comme keys
    $dic=array("consonnes"=>0,
                "voyelles"=>0
            );

    // Convertir la chaîne en minuscule pour simplifier la comparaison
    $str_lower= strtolower($str);

    // Définir les voyelles
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    // Définir les consonnes 
    $consonnes = [ 'b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z'];

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < mb_strlen($str_lower); $i++) {
        $char = mb_substr($str_lower, $i, 1);
        if (in_array($char, $voyelles)) {
                $dic["voyelles"]++;
            } elseif (in_array($char, $consonnes)) {
                $dic["consonnes"]++;
            }
        }
    





    echo"
    <table>
    <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </tr>
    <tr>
        <td>$dic[consonnes]</th>
        <td>$dic[voyelles]</th>
    </tr>
    </table>"
    ;



    
    ?>


</body>

</html>