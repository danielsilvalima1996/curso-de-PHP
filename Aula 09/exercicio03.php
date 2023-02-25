<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.ver {
            font-weight: bolder;
            color: #b50404;
            text-decoration: underline;
        }

        a#bot {
            font-size: 10pt;
            font-weight: bolder;
            padding: 10px;
            margin-left: 2px;
            margin-top: 10px;
            background-color: #28323c;
            color: #ffffff;
            display: inline-block;
        }
    </style>
</head>
<body>
<div>
    
  <?php
    $v1 = ($_GET["n1"]);
    $v2 = ($_GET["n2"]);
    $m = (($v1+$v2)/2);
    
    if ($m > 7) {
    	$sit = "APROVADO";
    }
    elseif ($m>=5 && $m<7) {
    	$sit = "RECUPERAÇÃO";
    }
    else {
    	$sit = "REPROVADO";
    }

    echo "A média entre <span class='ver'>$v1</span> e <span class='ver'>$v2</span> é igual à <span class='ver'>$m</span>. <br/>";
    echo "A situação do aluno é: <span class='ver'>$sit</span>.";
  ?>

  <br/> <a id="bot" href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
 