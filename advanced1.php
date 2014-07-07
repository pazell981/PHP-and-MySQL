<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Advanced 1</title>
	<meta name="description" content="PHP and MySQL - 07/07/14 - Advanced 1">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Advanced 1 - HTML Table</h1>
		<table>
			<thead>
				<tr>
					<th>User #</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Full Name in upper case</th>
					<th>Length of name</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$users = array( 
   						array('first_name' => 'Michael', 'last_name' => 'Choi'),
   						array('first_name' => 'John', 'last_name' => 'Supsupin'),
   						array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   						array('first_name' => 'KB', 'last_name' => 'Tonel'),
   						array('first_name' => 'Fred', 'last_name' => 'Flintstone'),
   						array('first_name' => 'Wilma', 'last_name' => 'Flintstone'),
   						array('first_name' => 'Pebbles', 'last_name' => 'Flintstone'),
   						array('first_name' => 'Barney', 'last_name' => 'Rubble'),
   						array('first_name' => 'Betty', 'last_name' => 'Rubble'),
   						array('first_name' => 'Bamm-Bamm', 'last_name' => 'Rubble'),
   						array('first_name' => 'George', 'last_name' => 'Jetson'),
   						array('first_name' => 'Jane', 'last_name' => 'Jetson'),
   						array('first_name' => 'Judy', 'last_name' => 'Jetson'),
   						array('first_name' => 'Elroy', 'last_name' => 'Jetson'),
   						array('first_name' => 'Rosie', 'last_name' => 'The Robot')
					);
					for($i = 1; $i <= count($users); $i++){
						$name = "";
						echo "<tr";
						if ($i%5 == 0){
							echo " class='highlight'";
						}
						echo "><td>" . $i . "</td><td>";
						foreach ($users[$i-1] as $key => $value) {
							echo $value . "</td><td>";
							$name = trim($name) . " " . $value;
						}
						echo $name . "</td><td>" . strtoupper($name);
						echo "</td><td>" . strlen($name) . "</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>