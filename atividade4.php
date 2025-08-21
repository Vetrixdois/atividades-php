<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativdade 4</title>
</head>
<body>
    <form action="">
        <label>Teste seu número: </label>
        <input type="number" name="number1" placeholder="Número 1", id="number1">
        <input type="number" name="number2" placeholder="Número 2", id="number2">
        <input type="number" name="number3" placeholder="Número 3", id="number3">
        <button type="submit" >Enviar</button>

    </form>
    
</body>
</html>

<?php
    if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])){
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];

        $numeros = [$number1, $number2, $number3];

        rsort($numeros);
        echo "Ordem decrescente: ";
        foreach ($numeros as $numero) {
            echo $numero . ", ";
        }
        echo "<br>";  
        
    }


?>