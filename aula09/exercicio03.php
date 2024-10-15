<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylelsheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2)/2;
        echo "A sua nota final é $media<br/>";
        
        if ($media >=5){
            $ap = "APROVADO";
        }
        else {
            $ap = "REPROVADO";
        }
        echo "Situação do aluno: $ap"
    ?>
</div>
</body>
</html>