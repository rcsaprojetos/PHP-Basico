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
       function teste (&$x) {
        $x += 2;
        echo "o valor de X e $x";
       } 
       $a = 3;
       teste($a);
       echo "<p>o valor de A e $a</p>"
    ?>
</div>
</body>
</html>