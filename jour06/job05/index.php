<?php
    // Détecte le style sélectionné, sinon style1 par défaut
    $selectedStyle = isset($_GET['style']) ? $_GET['style'] : 'style1';
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Charge uniquement la feuille de style sélectionnée -->
    <link rel="stylesheet" href="<?php echo $selectedStyle; ?>.css" />
</head>

<body>
    <h1>Formulaire </h1>
    <form action="index.php" method="get">
        <label>Veuillez choisir un style pour ce formulaire </label>
        <select name="style">
            <option value="style1" <?php if($selectedStyle=="style1") echo "selected"; ?>>style1</option>
            <option value="style2" <?php if($selectedStyle=="style2") echo "selected"; ?>>style2</option>
            <option value="style3" <?php if($selectedStyle=="style3") echo "selected"; ?>>style3</option>
        </select>
        <br><br>
        <input type="submit" value="Envoyer">
    </form>


</body>


</html>