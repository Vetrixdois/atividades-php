<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Estatísticas do Vetor com Botão</title>
</head>
<body>
    <h1>Estatísticas de um vetor de 20 números inteiros</h1>

    <form method="post">
        <button type="submit" name="gerar">Gerar vetor e mostrar estatísticas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gerar"])) {
        // Gerar vetor com 20 números inteiros aleatórios entre 1 e 100
        $vetor = [];
        for ($i = 0; $i < 20; $i++) {
            $vetor[] = rand(1, 100);
        }

        echo "<h2>Vetor gerado:</h2>";
        echo "<p>" . implode(", ", $vetor) . "</p>";

        // Inicializar variáveis para cálculo
        $maior = $vetor[0];
        $menor = $vetor[0];
        $soma = 0;
        $countPar = 0;

        foreach ($vetor as $num) {
            if ($num > $maior) {
                $maior = $num;
            }
            if ($num < $menor) {
                $menor = $num;
            }
            if ($num % 2 == 0) {
                $countPar++;
            }
            $soma += $num;
        }

        $percentualPar = ($countPar / count($vetor)) * 100;
        $media = $soma / count($vetor);

        echo "<h2>Resultados:</h2>";
        echo "<p><strong>Maior número:</strong> $maior</p>";
        echo "<p><strong>Menor número:</strong> $menor</p>";
        echo "<p><strong>Percentual de números pares:</strong> " . number_format($percentualPar, 2) . "%</p>";
        echo "<p><strong>Média dos elementos:</strong> " . number_format($media, 2) . "</p>";
    }
    ?>
</body>
</html>
