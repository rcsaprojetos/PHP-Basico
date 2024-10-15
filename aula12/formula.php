<?php 
    $c = isset ($_GET["val"])?$_GET["val"]:1;
    $v = 1;
    do {
     $res = $c * $v;
     echo "$c x $v = $res <br/>";
     $v++;
    } 
    while($v <= 10);
?>