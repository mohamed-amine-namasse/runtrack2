<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Définir les dimensions du rectangle
    $largeur = 20;
    $hauteur = 10;
    

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

</html>