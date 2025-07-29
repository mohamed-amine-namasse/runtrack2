<?php
    //On démarre une session
    session_start();
    
    //Réinitialisation de la liste si le bouton reset est cliqué
    if (isset($_POST['reset'])) {
    $_SESSION['prenom'] = 0;}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Liste des prénoms : <?php echo $_SESSION['nbvisites']; ?></p>
    <form action="index.php" method="post">
        <label>prénom:</label>
        <input type="text" name="prenom">
        <input type="submit" value="Envoyer">
    </form>


</body>


</html>