<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Perda de Massa Radioativa</title>
</head>
<body>
    <h1>Perda de Massa Radioativa</h1>

    <form method="post">
        <label for="massa_inicial">Massa inicial (padrão 1):</label>
        <input type="number" step="any" name="massa_inicial" id="massa_inicial" value="1" min="0.1" required />
        <br><br>
        <label for="limite">Limite da massa (ex: 0.10):</label>
        <input type="number" step="any" name="limite" id="limite" value="0.10" min="0" max="1" required />
        <br><br>
        <button type="submit">Calcular tempo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $massa = floatval($_POST["massa_inicial"]);
        $limite = floatval($_POST["limite"]);

        $tempo_segundos = 0;
        $intervalo = 30; // segundos
        $fator_perda = 0.75; // 25% de perda a cada 30 segundos

        // Validações básicas
        if ($massa <= 0 || $limite <= 0 || $limite >= $massa) {
            echo "<p style='color:red;'>Por favor, insira valores válidos. Massa inicial > limite > 0.</p>";
        } else {
            while ($massa >= $limite) {
                $massa *= $fator_perda;
                $tempo_segundos += $intervalo;
            }

            // Formatar tempo em minutos e segundos
            $minutos = floor($tempo_segundos / 60);
            $segundos = $tempo_segundos % 60;

            echo "<h2>Resultado</h2>";
            echo "<p>Tempo necessário para que a massa seja menor que {$limite}: <strong>$tempo_segundos segundos</strong>.</p>";
            echo "<p>Isso equivale a aproximadamente <strong>$minutos minutos e $segundos segundos</strong>.</p>";
        }
    }
    ?>
</body>
</html>
