<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Advanced 4</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Advanced 4">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Advanced 4 - Selection Sort</h1>
		<?php
			$array = array();
			for($i = 0; $i < 100; $i++){
				$array[]=rand(0, 10000);
			}
			$min=$array[0];
			for($i = 0; $i < count($array)-1; $i++){
    			for($j = $i; $j < count($array); $j++) { 
        			if($array[$j] <= $min) {
            			$min = $array[$j];
            			$minindex = $j;
        			}
    			}
    			$temp = $array[$minindex];
   				$array[$minindex] = $array[$i];
   				$array[$i] = $temp;
    			$min = $array[($i+1)];
			}
			var_dump($array);
		?>
	</div>
</div>
</body>
</html>