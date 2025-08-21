<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador e Produto</title>
</head>
<body>
    <h1>Contar até o número e calcular o produto</h1>

    <form method="post">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        if ($numero < 1) {
            echo "<p style='color:red;'>Por favor, digite um número maior ou igual a 1.</p>";
        } else {
            echo "<h2>Resultado</h2>";
            echo "<p><strong>Números de 1 até $numero:</strong><br>";

            $produto = 1;

            for ($i = 1; $i <= $numero; $i++) {
                echo $i . ($i < $numero ? ", " : "");
                $produto *= $i;
            }

            echo "</p>";
            echo "<p><strong>Produto (fatorial) de 1 até $numero:</strong> $produto</p>";
        }
    }
    ?>
</body>
</html>
