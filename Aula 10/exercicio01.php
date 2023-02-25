<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
	<style>
		span.foco {
	    font-weight: bold;
	    color: #7e050c;
		}

    	.botao {
		background-color: #273747;
		color: white;
		display: inline-block;
		margin-top: 5px;
		padding: 8px;
		box-shadow: 2px 2px 1px #aaaaaa;
		}

	</style>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;

        switch ($o) {
        	case 1:
        		$r = $n * 2;
        		break;
        	case 2:
        		$r = pow($n,3);
        		break;
        	case 3:
        		$r = sqrt($n);
        		break;
        }
    echo "O resultado da operação solicitada é <span class='foco'>$r</span>.";
    ?>
    <br> <a class="botao" href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 