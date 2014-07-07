<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Advanced 2</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Advanced 2">
	<link rel="stylesheet" type="text/css" href="css.css">
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#primary').change(function(){
					if($('#secondary').val()=='#000000' && $('#primary').val()=='#000000'){
						alert("Are you insane? The primary and secondary cannot be the same color.");
					} else {
						$('td').css("background-color", $('#primary').val());
						$('.flip').css("background-color", $('#secondary').val());
					}
				});
				$('#secondary').change(function(){
					if($('#secondary').val()=='#000000' && $('#primary').val()=='#000000'){
						alert("Are you insane? The primary and secondary cannot be the same color.");
					} else {
						$('td').css("background-color", $('#primary').val());
						$('.flip').css("background-color", $('#secondary').val());
					}
				});
			});
	</script>

</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Advanced 2 - Checkerboard</h1>
		<form>
			<p>Select your table colors.</p>
			<label>Primary: <select id='primary'>
				<option value="#000000">Black</option>
				<option value="#FFFFFF">White</option>
				<option value="#FFFFE0">Off-white</option>
				</select>
			</label>
			<label>Secondary: <select id='secondary'>
				<option value="#FF0000">Red</option>
				<option value="#000000">Black</option>
				<option value="#556B2F">Green</option>
				</select>
			</label>
		</form>
		<table>
			<tbody>
				<?php
					for($i = 0; $i < 8; $i++){
						echo "<tr>";
						for($j = 0; $j < 8; $j++){
							echo "<td ";
							if ($i%2==0 && $j%2==0){
								echo "class='flip'";	
							} elseif ($i%2!=0 && $j%2!=0) {
								echo "class='flip'";
							} 
							echo "></td>";
						}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>