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
        $v = array("nome"=>"Ludmila",
                    "peso"=>55.8,
                    "idade"=>28,
                    "sexo"=>"feminino");
        foreach ($v as $k => $c) {
            echo "O campo $k possui o conteudo $c. <br/>";
        }
    ?>
    </pre>
</div>
</body>
</html>