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
        $frase = "Gosto de estudar Matamatica";
        $novafrase = str_replace("Matematica", "PHP", $frase);
        echo "$novafrase";
    ?>
</div>
</body>
</html>