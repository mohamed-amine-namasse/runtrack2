<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label>largeur:</label><br>
        <input type="text" name="largeur"><br>
        <label>hauteur:</label><br>
        <input type="text" name="hauteur"><br>
        <input type="submit" value="Envoyer">

    </form>


    <?php
    
    // Définir les dimensions de la maison
    $largeur=$_GET["largeur"];
    $hauteur = $_GET["hauteur"];
    
    for( $i = 1; $i <=$hauteur; $i++ ){
        for( $j = 1; $j <=$largeur;$j++){
            //mettre une étoile si l'indice de ligne est égal à la première ligne ou la dernière
            if($i==1 || $i==$hauteur){
                echo "*";
            }
            //mettre une étoile si l'indice de colonne est égal à la première colonne ou la dernière
            elseif($j==1 || $j==$largeur){
                echo "*";
            }
            //mettre des espaces au milieu
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }
    
    
    ?>
</body>