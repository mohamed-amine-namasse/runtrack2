<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label>prénom:</label><br>
        <input type="text" name="fname"><br>
        <label>nom:</label><br>
        <input type="text" name="lname"><br>
        <input type="submit" value="Envoyer">

    </form>
    <?php
    $nombre_GET = count($_GET);
    echo "le nombre de d'argument GET envoyé est:" .$nombre_GET;
    ?>
</body>


</html>