<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    	<?php
            $v = array ( 3=>5,
                         1=>9,
                         0=>8,
                         9=>7);
            $v[] = 10;
            unset($v[0]);
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
 