<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     function leetSpeak($str)
    {
        $leet = [
            'A' => '4', 'a' => '4',
            'B' => '8', 'b' => '8',
            'E' => '3', 'e' => '3',
            'G' => '6', 'g' => '6',
            'L' => '1', 'l' => '1',
            'S' => '5', 's' => '5',
            'T' => '7', 't' => '7'
        ];
        return strtr($str, $leet); //fonction qui remplace les lettres par des chiffres leetspeak
    }


    echo leetSpeak("Salut les amis !");
    echo"<br />";
    echo leetSpeak("Superman");
      
    ?>
</body>

</html>