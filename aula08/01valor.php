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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a $rq";
    ?>
    <a href="exercicio1.html">Voltar</a>
</div>
</body>
</html>