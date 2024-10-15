<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylelsheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("A","J","N","K");
        print_r($v);
        asort($v); // coloca o vetor na ordem e o indice fica desordenado
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>