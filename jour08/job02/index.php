<?php
// Réinitialisation si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 365*24*3600);
    $nbvisites = 0;
} else {
    // Incrémentation du compteur
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    setcookie('nbvisites', $nbvisites, time() + 365*24*3600);
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
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">reset</button>
    </form>
</body>

</html>