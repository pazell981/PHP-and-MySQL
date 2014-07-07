<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Basics 1</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Basics 1">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Basics #1 - Score and Grade</h1>
		<ul>
			<?php
				$score=rand(50, 100);
				switch ($score) {
					case ($score < 70):
						echo "<h2>Your Score: " . $score . "/100</h2>";
						echo "<h3>Your grade is a D.</h3>";
						break;
					case ($score < 80):
						echo "<h2>Your Score: " . $score . "/100</h2>";
						echo "<h3>Your grade is a C.</h3>";
						break;
					case ($score < 90):
						echo "<h2>Your Score: " . $score . "/100</h2>";
						echo "<h3>Your grade is a B.</h3>";
						break;
					case ($score <= 100):
						echo "<h2>Your Score: " . $score . "/100</h2>";
						echo "<h3>Your grade is an A.</h3>";
						break;
					default:
						echo "<h2>There has been an error please reload the page.</h2>";
						break;
				}
			?>
		</ul>
	</div>
</div>
</body>
</html>