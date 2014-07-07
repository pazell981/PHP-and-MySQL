<?php
	$num1 = rand(1,20);
	$num2 = rand(1, 50);
	$ans = $num1*$num2;
	echo "$(document).ready(function(){";
		echo "alert('" . $num1 . " x " . $num2 . " = " . $ans . "');";
	echo "});";
?>