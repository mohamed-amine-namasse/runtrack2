<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <label>prénom:</label><br>
        <input type="text" name="prenom"><br>
        <label>nom:</label><br>
        <input type="text" name="nom"><br>
        <input type="submit" value="Envoyer">

    </form>


    <?php

    $nombre_POST = count($_POST);
    echo "le nombre de d'argument POST envoyé est:" .$nombre_POST;
    ?>
</body>


</html>