<?php

if ($_POST) {
    $salario = $_POST['salario'];


    if ($salario <= 280) {
        $conta = ($salario / 100) * 20;
        $total = $salario + $conta;
        $percent = "20%";
    } elseif ($salario > 280 && $salario <= 700) {

        $conta = ($salario / 100) * 15;
        $total = $salario + $conta;
        $percent = "15%";
    } elseif ($salario > 700 && $salario <= 1500) {

        $conta = ($salario / 100) * 10;
        $total = $salario + $conta;
        $percent = "10%";
    } elseif ($salario > 1500) {

        $conta = ($salario / 100) * 5;
        $total = $salario + $conta;
        $percent = "5%";
    } else {
        echo "Salário inválido.";
    }

    $resultado =
        "O salário antes do reajuste: $salario <br> 
    Porcentagem do aumento: $percent <br> 
    Valor aumentado: $conta <br> 
    Salário após o reajuste: R$ $total";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
</head>

<body>
    <h1>Calculador de aumento</h1>

    <form method="POST">
        <label for="salario">Digite o salário:</label> <br>
        <input type="number" name="salario" placeholder="Ex: 1320..." id="salario"> <br><br>

        <input type="submit" value="Enviar"> <br><br>

        <?php
        if ($_POST) {
            echo $resultado;
        }
        ?>
    </form>
</body>

</html>