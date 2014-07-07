<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Intermediate 2</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Intermediate 2">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Intermediate 2 - Multiplication Table</h1>
		<table>
			<?php
				echo "<thead><tr><th></th>";
				for($c = 1; $c < 10; $c++){
					echo "<th class='bold'>" . $c . "</th>";
					}
				echo "</tr></thead>";
				echo "<tbody>";
				for($i = 1; $i < 10; $i++){
					echo "<tr";
					if ($i%2 != 0) {
						echo " class='gray'";
					}
					echo ">";
					for($j = 0; $j < 10; $j++) {
						if($j == 0){
							echo "<td class='bold'>" . $i . "</td>";
						} else {
							echo "<td>" . ($i*$j) . "</td>";
						}
					}
					echo "</tr>";
				}
				echo "</tbody>";
			?>
		</table>
	</div>
</div>
</body>
</html>