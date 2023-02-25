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
        $ntab = isset($_GET["tab"])?$_GET["tab"]:0;

        $c = 1;
        echo "Mostrando a Tabuada de <span class='foco'>$ntab</span>.</br></br>";
        do {
        	$valor = $ntab * $c;
        	echo "$ntab x $c = $valor</br>";
        	$c ++;
        } while ($c <= 10);
    ?>
    <br><a class="botao" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 