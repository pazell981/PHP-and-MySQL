<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intro 7</title>
	<meta name="description" content="PHP and MySQL - 07/04/14 - Introduction 7">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Introduction #7</h1>
		<ul>
			<?php
				$users['first_name']='Michael';
				$users['last_name']='Choi';
				echo "<p>There are " . count($users) . " keys in this array: ";
				foreach($users as $key => $value){
					echo $key . ", ";
				}
				echo "</p>";
				foreach($users as $key => $value){
					echo "<p>The value in the key " . $key . " is " . $value . ".</p>";
				}
			?>
		</ul>
	</div>
</div>
</body>
</html>