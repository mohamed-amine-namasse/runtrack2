<?php
session_start();

// Initialiser ou réinitialiser le jeu
if (!isset($_SESSION['board']) || isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, null);
    $_SESSION['currentPlayer'] = 'X';
    $_SESSION['gameOver'] = false;
    $_SESSION['winner'] = null;
}

// Fonction pour vérifier si un joueur a gagné
function checkWin($board, $player) {
    $winPatterns = [
        [0,1,2], [3,4,5], [6,7,8], // lignes
        [0,3,6], [1,4,7], [2,5,8], // colonnes
        [0,4,8], [2,4,6]           // diagonales
    ];

    foreach ($winPatterns as $pattern) {
        if ($board[$pattern[0]] === $player &&
            $board[$pattern[1]] === $player &&
            $board[$pattern[2]] === $player) {
            return true;
        }
    }
    return false;
}

// Vérifier si la partie est terminée
function checkDraw($board) {
    return !in_array(null, $board);
}

// Traitement du clic sur une case
if (isset($_POST['cell'])) {
    $cellIndex = intval($_POST['cell']);

    // Si la partie n'est pas finie et la case est vide
    if (!$_SESSION['gameOver'] && $_SESSION['board'][$cellIndex] === null) {
        $_SESSION['board'][$cellIndex] = $_SESSION['currentPlayer'];

        // Vérifier si le joueur courant a gagné
        if (checkWin($_SESSION['board'], $_SESSION['currentPlayer'])) {
            $_SESSION['gameOver'] = true;
            $_SESSION['winner'] = $_SESSION['currentPlayer'];
        } elseif (checkDraw($_SESSION['board'])) {
            $_SESSION['gameOver'] = true;
            $_SESSION['winner'] = 'Match nul';
        } else {
            // Passer au joueur suivant
            $_SESSION['currentPlayer'] = ($_SESSION['currentPlayer'] === 'X') ? 'O' : 'X';
        }
    }
}

// Si le jeu est terminé, afficher le message et réinitialiser la partie
if ($_SESSION['gameOver']) {
    if ($_SESSION['winner'] === 'Match nul') {
        echo "<script>alert('Match nul');</script>";
    } else {
        echo "<script>alert('{$_SESSION['winner']} a gagné');</script>";
        // Réinitialiser la partie après l'alerte
        $_SESSION['board'] = array_fill(0, 9, null);
        $_SESSION['gameOver'] = false;
        $_SESSION['winner'] = null;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du morpion</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1>Jeu du Morpion </h1>


    <form action="index.php" method="post">
        <table>
            <?php
            $board = $_SESSION['board'];
            echo "<tr>";
            for ($i = 0; $i < 9; $i++) {
                if ($i > 0 && $i % 3 == 0) {
                    echo "</tr><tr>";
                }
                echo "<td>";
            if ($board[$i] === null && !$_SESSION['gameOver']) {
            // Case vide, bouton cliquable
            echo "<button type='submit' name='cell' value='$i'></button>";
            } else {
                // Afficher X ou O
                echo $board[$i] ?? '';
            }
            echo "</td>";
             }
            echo "</tr>";
             ?>
        </table>
    </form>
    <br>

    <form action="index.php" method="post">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>

</body>

</html>