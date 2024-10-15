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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos <br/>";
        if($i < 16) {
            $tipoVoto = "não vota";
        }
        elseif (($i >= 16 && $i < 18) || ($i > 64)) {
                $tipoVoto ="voto opcional";
                }
            else {
                $tipoVoto = "voto obrigadorio";
                }
        echo "Para essa idade, $tipoVoto";
    ?>
</div>
</body>
</html>