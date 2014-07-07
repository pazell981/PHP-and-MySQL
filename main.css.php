<?php
	header('Content-type: text/css');
	echo "*{padding: 0px; margin: 0px;}";
	echo "#wrapper{width: " . 100*10 . "px; margin: 0 auto;}";
	$colors = array('#FF0000','#00FF00','#0000FF','#FFFF00','#00FFFF','#FF00FF');
	echo "h2{color: " . $colors[rand(0,5)] . ";}";
	echo "p{color: " . $colors[rand(0,5)] . ";}";
?>
