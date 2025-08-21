<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Matriz 5x5: Pares e Ímpares</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 20px; }
        td { border: 1px solid #333; padding: 8px; text-align: center; width: 40px; }
    </style>
</head>
<body>
    <h1>Matriz 5x5: Completa, Ímpares e Pares</h1>

    <form method="post">
        <button type="submit" name="gerar">Gerar Matriz</button>
    </form>

    <?php
    function imprimir_matriz($matriz, $titulo) {
        echo "<h2>$titulo</h2>";
        echo "<table>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                $val = $matriz[$i][$j];
                echo "<td>" . ($val === null ? "" : $val) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gerar"])) {
        // Gerar matriz 5x5 aleatória
        $matriz = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $matriz[$i][$j] = rand(1, 100);
            }
        }

        imprimir_matriz($matriz, "Matriz Completa");

        // Matriz só com ímpares (pares substituídos por null)
        $matriz_impares = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $matriz_impares[$i][$j] = ($matriz[$i][$j] % 2 != 0) ? $matriz[$i][$j] : null;
            }
        }
        imprimir_matriz($matriz_impares, "Matriz com Números Ímpares");

        // Matriz só com pares (ímpares substituídos por null)
        $matriz_pares = [];
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $matriz_pares[$i][$j] = ($matriz[$i][$j] % 2 == 0) ? $matriz[$i][$j] : null;
            }
        }
        imprimir_matriz($matriz_pares, "Matriz com Números Pares");
    }
    ?>
</body>
</html>
