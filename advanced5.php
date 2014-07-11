<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Advanced 5</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Advanced 5">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Advanced 5 - Insertion Sort</h1>
		<?php
            function insertion_sort($array){
              for($i = 1; $i<count($array); $i++){
                $temp = $array[$i];
                $j=$i;
                while($j>0 && $array[$j-1]>$temp){
                    $array[$j] = $array[$j-1];
                    $j=$j-1;
                }
                $array[$j]=$temp;
              }
              return $array;
            }
            $array=array();
            for ($i = 0; $i < 100; $i++){
              $array[] = rand(1, 1000);
            }
            var_dump($array);
            $output=insertion_sort($array);
            var_dump($output);
        ?>
	</div>
</div>
</body>
</html>