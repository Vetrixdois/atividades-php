<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativade 5</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativdade 4</title>
</head>
<body>
    <form action="">
        <label>Classificação de Triângulo: </label>
        <input type="number" name="number1" placeholder="Lado 1", id="number1">
        <input type="number" name="number2" placeholder="Lado 2", id="number2">
        <input type="number" name="number3" placeholder="Lado 3", id="number3">
        <button type="submit" >Enviar</button>

    </form>
    
</body>
</html>

<?php
    if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])){
        $a = $_GET['number1'];
        $b = $_GET['number2'];
        $c = $_GET['number3'];

        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
            // Classifica o triângulo
            if ($a == $b && $b == $c) {
                echo "Triângulo Equilátero\n";
            } elseif ($a == $b || $a == $c || $b == $c) {
                echo "Triângulo Isósceles\n";
            } else {
                echo "Triângulo Escaleno\n";
            }
        } else {
            echo "Os lados fornecidos não formam um triângulo.\n";
        }
    }


?>
</body>
</html>