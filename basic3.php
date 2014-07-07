<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Basics 3</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Basics 3">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Basics #3 - Coin Throw</h1>
		<?php
			echo "<span class= 'b u'>Starting the program</span>";
			$h=0;
			$t=0;
			for($i = 1; $i <= 5000; $i++){
				$toss = rand(1,2);
				if($toss == 1){
					$h++;
					echo "<p>Attempt #" . $i . ": Throwing a coin... It's a head! ... Got " . $h . " head(s) so far and " . $t . " tail(s) so far.</p>";
				} else {
					$t++;
					echo "<p>Attempt #" . $i . ": Throwing a coin... It's a tails! ... Got " . $h . " head(s) so far and " . $t . " tail(s) so far.</p>";
				}
			}
			echo "<span class= 'b u'>Ending the program - Thank you!</span>";
		?>
	</div>
</div>
</body>
</html>