<?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ^ 3;
            break;
        case 3:
            $r = sqrt($n); // $n ^ 0.5;
    }
    echo "O resultado foi $r."
?>
<a href="exercicio01.html"><br/>Voltar</a>