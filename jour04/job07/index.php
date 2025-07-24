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

      
        
    

    
    if (isset($_GET["largeur"])&& isset($_GET["hauteur"])) {
    // Définir les dimensions du rectangle de la maison
    $largeur=$_GET["largeur"]+1;
    $hauteur = $_GET["hauteur"]+2;




    // Définir les dimensions du triangle
    $hauteur_triangle = $_GET["hauteur"];
    $base_triangle = $largeur;
    
    // Boucle pour chaque ligne du triangle
    for ($i = 1; $i <= $hauteur_triangle; $i++) {
        // Afficher les espaces pour centrer le triangle 
        for ($j = 1; $j <= $hauteur_triangle - $i; $j++) {
            echo "&nbsp;&nbsp";
        }
        // Afficher les étoiles
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        // Aller à la ligne suivante
        echo "<br/>";
    }
    
    for( $i = 1; $i <=$hauteur; $i++ ){
        for( $j = 1; $j <=$largeur;$j++){
            //mettre une étoile si l'indice de ligne est égal à la première ou dernière ligne
            if( $i==1||$i==$hauteur ){
                echo "_";
            }
            //mettre une étoile si l'indice de colonne est égal à la première colonne ou la dernière
            elseif($j==1 || $j==$largeur){
                echo "|";
            }
            //mettre des espaces au milieu
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }
    }
    
    ?>
</body>