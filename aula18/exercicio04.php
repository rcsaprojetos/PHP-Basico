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
        $v = array( 0=>5,
                    1=>9,
                    2=>8,
                    3=>7);
        unset($v[0]);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>