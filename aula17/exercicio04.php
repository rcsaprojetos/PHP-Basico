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
        $frase = "Estou aprendendo PHP";
        $pos = strpos ($frase, "PHP");
        echo "$frase <br/> A string foi encontrada na posicao $pos";
    ?>
</div>
</body>
</html>