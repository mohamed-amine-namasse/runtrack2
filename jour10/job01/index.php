<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $connexion = mysqli_connect('localhost', 'root');
    mysqli_select_db($connexion, 'jour09'); 
    if($connexion){
        echo "tu es connecté!";
    }
    else{echo "Echec de connexion";}

    $command= "SELECT * FROM etudiants";
    $result = mysqli_query($connexion, $command);
    


    ?>
    <br><br><br>
    <table>

        <tr>
            <?php 
            $fields = mysqli_fetch_fields($result);
            foreach ($fields as $field) {
            echo"<th>".htmlspecialchars($field->name)."</th>";}
            ?>
        </tr>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($fields as $field) {
            $fieldName = $field->name;
            echo "<td>" . htmlspecialchars($row[$fieldName]) . "</td>";
            }
            echo"</tr>";
            }
            
            ?>

    </table>
</body>

</html>