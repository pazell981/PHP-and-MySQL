<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Advanced 6</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Advanced 4">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Advanced 6 - Bubble Sort</h1>
		<?php
            function bubble_sort($array){
            	for ($i = 0; $i < count($array); $i++){
    				for ($j = 0; $j < count($array); $j++){
        				if ($j!=count($array)-1 && $array[$j] > $array[$j+1]){
            				$temp = $array[$j+1];
            				$array[$j+1] = $array[$j];
            				$array[$j] = $temp;
        				}
    				}
				}
              return $array;
            }
            $array=array();
            for ($i = 0; $i < 100; $i++){
              $array[] = rand(1, 1000);
            }
            var_dump($array);
            $output = bubble_sort($array);
            var_dump($output);
        ?>
	</div>
</div>
</body>
</html>