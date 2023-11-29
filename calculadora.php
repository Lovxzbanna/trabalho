<?php
$altura = $_POST['txtAltura'];
$quadril = $_POST['txtQuadril'];
$genero = $_POST['txtGenero'];
$tipo;
$IAC = ($quadril/($altura*sqrt($altura)))-18;

if ($genero == "homem" && $IAC<=20){
    $tipo= "Normal";
}else if($genero == "homem" && $IAC >= 21 || $IAC<=25){
    $tipo= "Sobrepeso";
}else if($genero == "homem" && $IAC > 25){
    $tipo= "Obesidade";
}else if($genero == "mulher" && $IAC >=21 || $IAC<= 32){
    $tipo= "normal";
}else if($genero == "mulher" && $IAC >=33 || $IAC<= 38){
    $tipo= "Sobrepeso";
}else if($genero == "mulher" && $IAC >38){
    $tipo= "Obesidade";
}
$resultados = [
    "Altura" => $altura,
    "Circunferencia" => $circunferencia,
    "IAC" => (round($iac, 2)),
    "Categoria" => $categoria
];
echo ("Seu Índice corporal é: $tipo ");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificação de tiposidade</title>
</head>
<body>
    <h1>Sua classificação é: </h1>
    
</body>
</html>


