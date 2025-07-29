<?php
// Start the session
session_start();

// Réinitialisation si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémentation du compteur
if (isset($_SESSION['nbvisites'])) {
        $nbvisites = $_SESSION['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
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
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">reset</button>
    </form>
</body>

</html>