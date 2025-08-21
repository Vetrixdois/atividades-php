<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Matriz 5x5 e Diagonal Principal com Botão</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid #333; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h1>Matriz 5x5 e sua Diagonal Principal</h1>

    <form method="post">
        <button type="submit" name="gerar">Gerar Matriz</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gerar"])) {
        // Criar matriz 5x5 com valores aleatórios entre 1 e 100
        $matriz = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $matriz[$i][$j] = rand(1, 100);
            }
        }

        // Imprimir matriz em tabela
        echo "<h2>Matriz gerada:</h2>";
        echo "<table>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Imprimir elementos da diagonal principal
        echo "<h2>Elementos da diagonal principal:</h2>";
        $diagonal = [];
        for ($i = 0; $i < 5; $i++) {
            $diagonal[] = $matriz[$i][$i];
        }

        echo "<p>" . implode(", ", $diagonal) . "</p>";
    }
    ?>
</body>
</html>
