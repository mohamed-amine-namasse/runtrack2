<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str="I'm sorry Dave I'm afraid I can't do that";
    // Convertir la chaîne en minuscule pour simplifier la comparaison
    $str_lower = strtolower($str);

    // Définir les voyelles
    $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($str_lower); $i++) {
        $char = $str_lower[$i];
        // Vérifier si le caractère est une voyelle
        if (in_array($char, $vowels)) {
            // Afficher la voyelle
            echo $char;
        }
    }
    ?>
</body>

</html>