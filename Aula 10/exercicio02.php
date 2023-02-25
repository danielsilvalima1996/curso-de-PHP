<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
	<style>
	    .botao {
		background-color: #273747;
		color: white;
		padding: 8px;
		box-shadow: 2px 2px 1px #aaaaaa;
		}
    </style>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
        	case 2:
        	case 3:
        	case 4:
        	case 5:
        	case 6:
        		echo "Levanta e vai estudar! :D";
        		break;
        	case 7:
        	case 1:
        		echo "Descanse, pequeno gafanhoto! ;D";
        		break;
        	default:
        		echo "Dia da semana invalido!";
        }
    ?>

   <br><a class="botao" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 