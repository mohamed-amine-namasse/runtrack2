<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required />

        <label for="fonction">Fonction :</label>
        <select id="fonction" name="fonction" required>
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>

        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        // Fonction pour mettre en gras les mots commençant par une majuscule
        function gras($text) {
            return preg_replace_callback('/\b\w+\b/', function($matches) {
                $word = $matches[0];
                if (ctype_upper($word[0])) {
                    return "<b>$word</b>";
                } else {
                    return $word;
                }
            }, $text);
        }

        // Fonction pour décaler chaque caractère (chiffrement de César)
        function cesar($text, $decalage = 2) {
            $result = '';
            for ($i = 0; $i < strlen($text); $i++) {
                $char = $text[$i];
                if (ctype_alpha($char)) {
                    $base = ctype_upper($char) ? ord('A') : ord('a');
                    $offset = (ord($char) - $base + $decalage) % 26;
                    $result .= chr($base + $offset);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        // Fonction pour ajouter un "_" aux mots finissant par "me"
        function plateforme($text) {
            return preg_replace_callback('/\b\w+\b/', function($matches) {
                $word = $matches[0];
                if (substr($word, -2) === 'me') {
                    return $word . '_';
                } else {
                    return $word;
                }
            }, $text);
        }

        // Appliquer la transformation selon le choix
        $result = '';

        switch ($fonction) {
            case 'gras':
                $result = gras($str);
                break;
            case 'cesar':
                $result = cesar($str, 2);
                break;
            case 'plateforme':
                $result = plateforme($str);
                break;
            default:
                $result = $str;
        }

        echo "<h2>Résultat :</h2>";
        echo "<p>$result</p>";
    }
?>


</body>

</html>