<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Basics 4</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Basics 4">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Basics #4 - Min and Max Function</h1>
		<?php
			function get_max_and_min($array){
				$max=$array[0];
				$min=$array[0];
				for($i=0; $i < count($array); $i++){
					if($array[$i] < $min){
						$min = $array[$i];
					}
					if($array[$i] > $max){
						$max = $array[$i];
					}
				}
				$minmax['min'] = $min;
				$minmax['max'] = $max;
				return $minmax;
			}
			$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
			$output = get_max_and_min($sample);
			var_dump($sample);
			echo "The maximum and minimum of the above array are:";
			var_dump($output);
			$sample2 = array();
			for($i = 0; $i < 10; $i++) {
				$sample2[] = rand(-100, 100);
			}
			$output2 = get_max_and_min($sample2);
			var_dump($sample2);
			echo "The maximum and minimum of the above array are:";
			var_dump($output2);
		?>
	</div>
</div>
</body>
</html>