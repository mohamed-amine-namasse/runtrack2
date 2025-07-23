<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tableau=array(200,204,173,98,171,404,459);
    for ($i= 0; $i<count($tableau); $i++){
        if ($tableau[$i] % 2 == 0){
            echo $tableau[$i]. " est paire<br />";}
        if ($tableau[$i] % 2 == 1){
            echo $tableau[$i]. " est impaire<br />";}
        }
    ?>
</body>

</html>