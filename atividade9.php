<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imprimir a palavra SOL</title>
</head>
<body>
    <h1>Imprimir a palavra "SOL"</h1>

    <form method="post">
        <label for="quantidade">Quantas vezes deseja imprimir "SOL"?</label>
        <input type="number" name="quantidade" id="quantidade" min="1" required>
        <button type="submit">Imprimir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantidade = intval($_POST["quantidade"]);

        if ($quantidade < 1) {
            echo "<p style='color:red;'>Por favor, digite um número maior ou igual a 1.</p>";
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>";
            for ($i = 1; $i <= $quantidade; $i++) {
                echo "SOL<br>";
            }
            echo "</p>";
        }
    }
    ?>
</body>
</html>
    