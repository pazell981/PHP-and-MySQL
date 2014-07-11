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
		<h1>Advanced 4</h1>
		<?php
			$array = array();
			for($i = 0; $i < 1000; $i++){
				$array[]=rand(0, 1000);
			}
			$stime = microtime(true);
			for($i = 0; $i < count($array); $i++){
				$minindex=$i;
				$maxindex=$i;
    			for($j = $i; $j < (count($array)-$i); $j++) { 
        			if($array[$j] > $array[$minindex]) {
            			$minindex = $j;
        			}
        			if ($array[$j] < $array[$maxindex]) {
            			$maxindex = $j;
        			}
    			}
    			if($minindex==(count($array)-1-$i)){
    				$temp = $array[$i];
    				$array[$i] = $array[$minindex];
    				$array[$minindex] = $temp;
    			} else {
    				$temp = $array[$i];
   	    			$array[$i] = $array[$minindex];
	    			$array[$minindex] = $temp;
	    			$temp2 = $array[(count($array)-1-$i)];
	    			$array[(count($array)-1-$i)] = $array[$maxindex];
	    			$array[$maxindex] = $temp2;
    			}
    		}
    		$ftime = microtime(true);
			var_dump($array);
			echo "The sort took " . ($ftime-$stime) . " seconds."
		?>
	</div>
</div>
</body>
</html>