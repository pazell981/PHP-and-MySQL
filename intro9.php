<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 9</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Introduction 9">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #9</h1>
		<ul>
			<?php
				for($i = 1; $i<=2000; $i++){
					if($i%2!==0){
						echo "<p>The number is " . $i . ". This is an odd number.</p>";
					} else {
						echo "<p>The number is " . $i . ". This is an even number.</p>";
					}
				}
				var_dump($A);
			?>
		</ul>
	</div>
</div>
</body>
</html>