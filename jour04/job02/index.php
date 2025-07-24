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
        <input type="text" name="prenom"><br>
        <label>nom:</label><br>
        <input type="text" name="nom"><br>
        <input type="submit" value="Envoyer">

    </form>


    <?php
    
    if (isset($_GET["prenom"])&& isset($_GET["nom"])) {
    $tableau=array($_GET["prenom"],$_GET["nom"]);
    echo "
    <table>
    <tr>
    <th>Argument</th>
    <th>Valeur</th>
    </tr>
    <tr>
    <td>prenom</td>
    <td>$tableau[0]</td>
    </tr>
    <tr>
    <td>nom</td>
    <td>$tableau[1]</td>
    </tr>
    </table>
 ";
    
    
    }
    ?>
</body>


</html>