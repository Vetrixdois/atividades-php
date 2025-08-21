<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pirâmide de Palavra</title>
</head>
<body>
    <h1>Pirâmide de Palavra</h1>

    <form method="post">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit">Imprimir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = strtoupper(trim($_POST["palavra"])); // Deixa em maiúsculas

        echo "<h2>Resultado:</h2>";

        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $palavra . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
