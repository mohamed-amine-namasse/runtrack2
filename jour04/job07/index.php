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
    

    // Définir les dimensions du triangle
    $hauteur_triangle = $_GET["hauteur"];
    $largeur_triangle = $_GET["largeur"];

    // Définir les dimensions du rectangle de la maison
    
    
    $hauteur = $hauteur_triangle+2;

   






    // Boucle pour chaque ligne du triangle
    for ($i = 1; $i <= $hauteur_triangle; $i++) {
        // Calcul du nombre de caractères à afficher sur la ligne
        $nb_chars = ($largeur_triangle - 1) / ($hauteur_triangle - 1) * ($i - 1) + 1;
        $nb_chars = intval(round($nb_chars));
        // Espaces pour centrer
        $espaces = intval(($largeur_triangle - $nb_chars) / 2);
        for ($j = 0; $j < $espaces; $j++) {
            echo "&nbsp;&nbsp;";
        }
         // Affichage du toit
        for ($k = 1; $k <= $nb_chars; $k++) {
            
            if ($i == 1) {
                // Sommet du triangle :
                echo "/\\";
            }
            
            elseif ($k == 1) {//pour les bords de droite du toit
                echo "/";
            } 
            elseif ($k == $nb_chars) {//pour les bords de gauche du toit
                echo "\\";
            
            }
            elseif ($i == $hauteur_triangle) {echo "&nbsp;&nbsp";}
            else {   // on met des espaces entre les 2 bords
                echo "_";
            }
        }
        // Aller à la ligne suivante
        echo "<br/>";
    }
    //boucle pour le rectangle 
    for( $i = 1; $i <=$hauteur; $i++ ){
        for( $j = 1; $j <=$largeur_triangle;$j++){
            //mettre une étoile si l'indice de ligne est égal à la première ou dernière ligne
            if( $i==1||$i==$hauteur ){
                echo "_";
            }
            //mettre une étoile si l'indice de colonne est égal à la première colonne ou la dernière
            elseif($j==1 || $j==$largeur_triangle){
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