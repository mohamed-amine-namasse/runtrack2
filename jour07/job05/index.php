<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function occurences($str,$char)
    {   
        $occurence=0;
        for ($i = 0; $i < strlen($str); $i++){
            if($str[$i]==$char){ $occurence++;}


        }
        echo "le nombre d'occurrences de {$char} est {$occurence}";
    }
    occurences("gogo","o");
    echo"<br />";
    occurences("gogo","g");
      
    ?>
</body>

</html>