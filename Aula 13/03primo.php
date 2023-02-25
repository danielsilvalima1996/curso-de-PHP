<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $num = isset($_GET["primo"])?$_GET["primo"]:1;
        $div = 0;
        echo "Analisando o número $num ...</br>";
        echo "Valores Múltiplos: ";
        for ($v = 1; $v <= $num ; $v++) {
        	if (($num % $v == 0) and ($num > 1)) {
        		$div++;
        		echo " $v ";
        	}
	        elseif ($num == 1) {
	        	echo "1";
	        	$div = 1;
	        }
        }

        echo "</br>Total de Múltiplos: ";
        if ($div == 2) {
        	echo "$num <span class='foco'>É PRIMO!</span>";
        }
        else {
        	echo "$num <span class='foco'>NÃO É PRIMO!<span>";
        }
    ?>
    <br><br><a class='botao' href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 