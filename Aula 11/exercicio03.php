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
    	$i = $_GET["ini"];
    	$f = $_GET["fim"];
    	$int = $_GET["inter"];


    	if ($i < $f) {
    		while ($i < $f) {
    			echo " $i ";
    			$i += $int;
    		}
    	}

    	else {
			while ($i > $f) {
    			echo " $i ";
    			$i -= $int;
			}
    	}
    ?>

    <br><a class="botao" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 