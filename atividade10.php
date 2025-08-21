<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma dos Positivos e Total de Negativos</title>
</head>
<body>
    <h1>Digite 20 números</h1>

    <form method="post">
        <?php
        // Criar 20 campos de entrada
        for ($i = 1; $i <= 20; $i++) {
            echo "<label for='num$i'>Número $i:</label> ";
            echo "<input type='number' name='num[]' id='num$i' required><br><br>";
        }
        ?>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST['num'];
        $somaPositivos = 0;
        $totalNegativos = 0;

        foreach ($numeros as $n) {
            $numero = intval($n);
            if ($numero > 0) {
                $somaPositivos += $numero;
            } elseif ($numero < 0) {
                $totalNegativos++;
            }
        }

        echo "<h2>Resultado:</h2>";
        echo "<p><strong>Soma dos números positivos:</strong> $somaPositivos</p>";
        echo "<p><strong>Total de números negativos:</strong> $totalNegativos</p>";
    }
    ?>
</body>
</html>
