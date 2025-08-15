<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form>
        <label>Teste seu número: </label>
        <input type="number" name="number" placeholder="Número", id="number">
        <button type="submit" >Enviar</button>
    </form>
</body>
</html>



<?php
if(isset($_GET['number'])){
    $number = $_GET['number'];

    if($number%10 == 0 && $number%5 == 0 && $number%2 == 0){
        echo "<p>Seu número é divisel por 10, 5 e 2.</p>";
    }else{
        echo "<p>Seu número não é divisel por 10, 5 e 2.</p>";
    }elseif($number%10 == 0 && $number%5 == 0){
        
    }
}   



?>