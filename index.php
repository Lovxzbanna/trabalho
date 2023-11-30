<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IAC </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h1> Calculadora IAC </h1>
        <form action="" method="post">
            <p>
                Digite a circunferência do seu quadril  (em cm):
                <input class="quadril" name="txtQuadril" type="number">
            </p>
            <p>
                Digite sua altura (em cm):
                <input type="number" name="txtAltura" class="altura">
            </p>
            <p>
                Digite seu gênero:
                <input class="genero" name="txtGenero" type="text">
            </p>
            <p class="botao">
                <input type="submit" value="Calcular" name="calcular">
            </p>
        </form>
        <div class="php">
            <?php
                if(isset($_POST['calcular'])) {
                    $altura = (int) $_POST['txtAltura'];
                    $quadril = (int)$_POST['txtQuadril'];
                    $genero = $_POST['txtGenero'];
                    $tipo;
                    $IAC = ($quadril/($altura*sqrt($altura)))-18;
                    if ($genero == "homem" && $IAC<=20){
                        $tipo= "Normal";
                        echo "seu tipo é $tipo";
                    }else if($genero == "homem" && $IAC >= 21 || $IAC<=25){
                        $tipo= "Sobrepeso";
                        echo "seu tipo é $tipo";
                    }else if($genero == "homem" && $IAC > 25){
                        $tipo= "Obesidade";
                        echo "seu tipo é $tipo";
                    }else if($genero == "mulher" && $IAC >=21 || $IAC<= 32){
                        $tipo= "normal";
                        echo "seu tipo é $tipo";
                    }else if($genero == "mulher" && $IAC >=33 || $IAC<= 38){
                        $tipo= "Sobrepeso";
                        echo "seu tipo é $tipo";
                    }else if($genero == "mulher" && $IAC >38){
                        $tipo= "Obesidade";
                        echo "seu tipo é $tipo";
                    }
                    $dados = [
                        "Altura" => $altura,
                        "Quadril" => $quadril,
                        "IAC" => (round($IAC, 2)),
                        "Tipo" => $tipo
                    ];
                }   
            ?>
        </div>
    </div>
</body>

</html> 