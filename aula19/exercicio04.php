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
        array_unshift($v ,"O"); // COLOCA NO INÍCIO DO VETOR
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>