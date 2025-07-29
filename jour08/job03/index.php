<?php
// On démarre une session
session_start();

// Réinitialisation de la liste si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = 0;
}

if (isset($_POST['prenom'])) {
    $prenom=$_SESSION['prenoms'] ;
    echo $prenom;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <label>prénom:</label>
        <input type="text" name="prenom">
        <input type="submit" value="Envoyer">
        <button type="submit" name="reset">reset</button>
    </form>

    <p>Liste des prénoms :

    </p>
</body>

</html>