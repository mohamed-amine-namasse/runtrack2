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

    
    

    // S'assurer que la largeur est impaire
    if ($largeur_triangle % 2 == 0) {
        $largeur_triangle++; // arrondi à l'impair supérieur
    }

    

    
    // Boucle pour chaque ligne du triangle (base = largeur saisie)
    for ($i = 0; $i < $hauteur_triangle; $i++) {
        // Largeur de la ligne courante (1 au sommet, largeur totale à la base)
        $largeur_ligne = intval(2+ ($largeur_triangle - 1) * $i / ($hauteur_triangle - 1));
        // Position du bord gauche pour chaque ligne
        $bord_gauche = intval(($largeur_triangle - $largeur_ligne) / 2);
        // Position du bord droit (toujours aligné verticalement)
        $bord_droit = $largeur_triangle - $bord_gauche - 1;

        for ($j = 0; $j < $largeur_triangle; $j++) {
            if ($j == $bord_gauche) {
                echo "/";
            } elseif ($j == $bord_droit) {
                echo "\\";
            } 
             elseif ($j>$bord_gauche && $j < $bord_droit){
                echo "_";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }









    //boucle pour le rectangle 
    
    for( $i = 1; $i <= $hauteur_triangle; $i++ ){
   

    
    for( $j = 1; $j <= $largeur_triangle; $j++ ){
        //mettre un trait vertical si l'indice de colonne est égal à la première colonne ou la dernière
        if($j==1 || $j==$largeur_triangle){
            echo "|";
        }
        elseif($i == $hauteur_triangle){
            //le trait de la base du rectangle
            echo "_";
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