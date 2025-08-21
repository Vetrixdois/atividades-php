<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Números não comuns entre vetores</title>
</head>
<body>
    <h1>Números não comuns entre dois vetores</h1>

    <form method="post">
        <button type="submit" name="gerar">Gerar vetores e calcular não comuns</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gerar"])) {
        // Gerar dois vetores com 10 números inteiros aleatórios entre 1 e 50
        $vetor1 = [];
        $vetor2 = [];

        for ($i = 0; $i < 10; $i++) {
            $vetor1[] = rand(1, 50);
            $vetor2[] = rand(1, 50);
        }

        // Vetor para os números não comuns
        // Não comuns = números que estão em vetor1 ou vetor2, mas não em ambos

        // Usar array_merge + array_unique e depois remover os comuns
        $todos = array_merge($vetor1, $vetor2);
        $unicos = array_unique($todos);

        // Encontrar os números comuns
        $comuns = array_intersect($vetor1, $vetor2);

        // Números não comuns são os que estão em $unicos mas não em $comuns
        $nao_comuns = array_diff($unicos, $comuns);

        // Mostrar resultados
        echo "<h2>Vetor 1:</h2>";
        echo "<p>" . implode(", ", $vetor1) . "</p>";

        echo "<h2>Vetor 2:</h2>";
        echo "<p>" . implode(", ", $vetor2) . "</p>";

        echo "<h2>Números não comuns aos dois vetores:</h2>";
        echo "<p>" . implode(", ", $nao_comuns) . "</p>";
    }
    ?>
</body>
</html>
