<?php

// Déconnexion : suppression du cookie
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    unset($_COOKIE['prenom']);
}

// Connexion : ajout du prénom dans le cookie
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    setcookie('prenom', trim($_POST['prenom']), time() + 3600);
    $_COOKIE['prenom'] = trim($_POST['prenom']); // Pour affichage immédiat
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
    <?php if (empty($_COOKIE['prenom'])): ?>
    <form action="index.php" method="post">
        <label>prénom:</label>
        <input type="text" name="prenom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
    <?php else: ?>
    <p>Bonjour <?php echo $_COOKIE['prenom']; ?> !</p>
    <form action="index.php" method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
    <?php endif; ?>
</body>

</html>