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

    // Calcul de la hauteur à partir de la largeur
    $hauteur_triangle = intval(($largeur_triangle + 1) / 2);

    // Boucle pour chaque ligne du triangle (défini par la largeur)
    for ($i = 0; $i < $hauteur_triangle; $i++) {
        // Nombre d'espaces à gauche pour centrer
        $espaces = $hauteur_triangle - $i - 1;
        echo str_repeat("&nbsp;&nbsp;", $espaces);

        // Largeur de la ligne courante
        $largeur_ligne = 2 * $i + 1;

        for ($j = 0; $j < $largeur_ligne; $j++) {
            if ($j == 0) {
                echo "/"; // bord gauche
            } elseif ($j == $largeur_ligne - 1) {
                echo "\\"; // bord droit
            } elseif ($i == $hauteur_triangle - 1) {
                echo "_"; // base
            } else {
                echo "_"; // intérieur
            }
        }
        echo "<br/>";
    }








    //boucle pour le rectangle 
    
    for( $i = 1; $i <= $hauteur_triangle-1; $i++ ){
   

    
    for( $j = 1; $j <= $largeur_triangle; $j++ ){
        //mettre un trait vertical si l'indice de colonne est égal à la première colonne ou la dernière
        if($j==1 || $j==$largeur_triangle){
            echo "|";
        }
        elseif($i == $hauteur_triangle-1){
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