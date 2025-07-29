<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="get">
        <label>nombre:</label><br>
        <input type="number" name="nombre"><br>
        <input type="submit" value="Envoyer">

    </form>


    <?php
    if (isset($_GET["nombre"])) {
    if( $_GET["nombre"] % 2 == 0 ){
       echo "Nombre pair";
    }
    else {
        echo "Nombre impair";
    }
    }
   
    
    
    
    ?>
</body>

</html>