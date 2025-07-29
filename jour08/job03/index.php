<?php
// On démarre une session
session_start();

// Réinitialisation de la liste si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout du prénom si le formulaire est soumis
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
   $_SESSION['prenoms'][] = trim($_POST['prenom']);
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
        <button type="submit" name="submit">Envoyer</button>
        <button type="submit" name="reset">reset</button>
    </form>
    <p>Liste des prénoms : <br>
        <?php
        
    if (!empty($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo $prenom ."<br/>" ;
        }
    } else {
        echo 'Aucun prénom enregistré.';
    }
        ?>
    </p>
</body>

</html>