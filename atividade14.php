<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Crescimento: Chico e Juca</title>
</head>
<body>
    <h1>Comparação de crescimento: Chico vs. Juca</h1>

    <form method="post">
        <button type="submit" name="calcular">Calcular Anos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        // Alturas iniciais em metros
        $chico = 1.50;
        $juca = 1.10;

        // Crescimento por ano em metros (2 cm = 0.02 m, 3 cm = 0.03 m)
        $crescimento_chico = 0.02;
        $crescimento_juca = 0.03;

        $anos = 0;

        while ($juca <= $chico) {
            $chico += $crescimento_chico;
            $juca += $crescimento_juca;
            $anos++;
        }

        echo "<h2>Resultado</h2>";
        echo "<p>Serão necessários <strong>$anos anos</strong> para que Juca seja mais alto que Chico.</p>";
        echo "<p>Altura final de Chico: " . number_format($chico, 2, ',', '.') . " m</p>";
        echo "<p>Altura final de Juca: " . number_format($juca, 2, ',', '.') . " m</p>";
    }
    ?>
</body>
</html>
