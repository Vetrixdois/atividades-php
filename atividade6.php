<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Mês</title>
</head>
<body>
    <h1>Digite um número entre 1 e 12</h1>
    
    <form method="post">
        <label for="numero">Número do mês:</label>
        <input type="number" name="numero" id="numero" min="1" max="12" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        $meses = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        if (array_key_exists($numero, $meses)) {
            echo "<p>O mês correspondente é <strong>{$meses[$numero]}</strong>.</p>";
        } else {
            echo "<p><strong>Não existe mês com esse número.</strong></p>";
        }
    }
    ?>
</body>
</html>
