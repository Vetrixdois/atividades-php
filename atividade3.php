<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form>
        <label>Coloque seus dados: </label>
        <input type="text" name="name" placeholder="Nome", id="name">
        <input type="number" name="number" placeholder="Idade", id="number">
        <select name="sexo" id="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>
        <button type="submit" >Enviar</button>
    </form>
</body>
</html>

<?php
    if(isset($_GET['number']) && isset($_GET['name']) && isset($_GET['sexo'])){
        $name = $_GET['name'];
        $idade = $_GET['number'];
        $sexo = $_GET['sexo'];

        
    $valores = [$name, $sexo, $idade];

    if($idade < 25 && $sexo == "Feminino"){
        echo "$name ACEITA";
    }else{
        echo "$name NÃO ACEITA";
    }
    }



?>

