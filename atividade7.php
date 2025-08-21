<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Empréstimo de Livro</title>
</head>
<body>
    <h1>Formulário de Empréstimo de Livro</h1>

    <form method="post">
        <label for="livro">Nome do livro:</label>
        <input type="text" name="livro" id="livro" required><br><br>

        <label for="tipo_usuario">Tipo de usuário:</label>
        <select name="tipo_usuario" id="tipo_usuario" required>
            <option value="">-- Selecione --</option>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select><br><br>

        <button type="submit">Gerar Recibo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $livro = htmlspecialchars(trim($_POST["livro"]));
        $tipo_usuario = $_POST["tipo_usuario"];

        // Definindo prazos de devolução
        if ($tipo_usuario === "professor") {
            $dias = 10;
        } elseif ($tipo_usuario === "aluno") {
            $dias = 3;
        } else {
            $dias = null;
        }

        if ($dias !== null) {
            echo "<h2>Recibo de Empréstimo</h2>";
            echo "<p><strong>Livro:</strong> $livro</p>";
            echo "<p><strong>Usuário:</strong> $tipo_usuario</p>";
            echo "<p><strong>Prazo para devolução:</strong> $dias dias</p>";
        } else {
            echo "<p style='color: red;'>Tipo de usuário inválido.</p>";
        }
    }
    ?>
</body>
</html>
