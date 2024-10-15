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
        <table border="1"><tr>
    <?php
        $c = range(2,30,2);
        foreach ($c as $i) {
            echo "<td>$i ";
        }
    ?>
        </table>
    </pre>
</div>
</body>
</html>