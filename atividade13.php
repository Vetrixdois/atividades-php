<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contar números entre 100 e 200</title>
</head>
<body>
    <h1>Digite números (0 para encerrar)</h1>

    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    session_start();

    // Inicializa array na sessão, se não existir
    if (!isset($_SESSION['numeros'])) {
        $_SESSION['numeros'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        if ($numero === 0) {
            // Contar quantos estão entre 100 e 200
            $entre100e200 = 0;
            foreach ($_SESSION['numeros'] as $n) {
                if ($n >= 100 && $n <= 200) {
                    $entre100e200++;
                }
            }

            echo "<h2>Encerrado!</h2>";
            echo "<p>Total de números digitados entre 100 e 200: <strong>$entre100e200</strong></p>";

            // Limpa os dados da sessão
            session_destroy();
        } else {
            $_SESSION['numeros'][] = $numero;

            echo "<p>Número <strong>$numero</strong> registrado. Digite outro número ou 0 para encerrar.</p>";
        }
    }
    ?>
</body>
</html>
