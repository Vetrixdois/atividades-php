<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Números Par ou Ímpar</title>
</head>
<body>
    <h1>Digite 15 números inteiros</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numeros"])) {
        $numeros = $_POST["numeros"];
        echo "<h2>Resultado:</h2>";
        echo "<ul>";
        foreach ($numeros as $num) {
            $numInt = intval($num);
            $parImpar = ($numInt % 2 == 0) ? "par" : "ímpar";
            echo "<li>Número $numInt é <strong>$parImpar</strong></li>";
        }
        echo "</ul>";
    } else {
    ?>

    <form method="post">
        <?php
        // Gera 15 campos para entrada de números
        for ($i = 1; $i <= 15; $i++) {
            echo "<label for='num$i'>Número $i:</label> ";
            echo "<input type='number' name='numeros[]' id='num$i' required><br><br>";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>

    <?php } ?>
</body>
</html>
