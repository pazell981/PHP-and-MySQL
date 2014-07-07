<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 8</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Introduction 8">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #8</h1>
		<ul>
			<?php
				$A = array();
				for($i = 1; $i<=2000000; $i++){
					if($i%2!==0){
						$A[]=$i;
					}
				}
				var_dump($A);
			?>
		</ul>
	</div>
</div>
</body>
</html>