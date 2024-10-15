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
    function soma ($a, $b) {
        $s = $a + $b;
        echo "<p>A soma vale $s</p>";
    }
    soma(3,4);
    soma(10, 5);
    soma(5, 6);
     
    ?>
</div>
</body>
</html>