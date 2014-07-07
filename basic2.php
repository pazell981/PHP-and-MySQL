<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL - Basics 2</title>
	<meta name="description" content="PHP and MySQL - 07/06/14 - Basics 2">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="container">
	<div id="wrapper">
		<h1>Basics #2 - States</h1>
		<form>
			<select name="state">
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				for ($i = 0; $i < count($states); $i++) {
					echo "<option value='" . strtolower($states[$i]) . "'>" . $states[$i] . "</option>";
				}
			?>
			</select>
			<select name="state2">
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				foreach ($states as $value) {
					echo "<option value='" . strtolower($value) . "'>" . $value . "</option>";
				}
			?>
			</select>
			<select name="state3">
			<?php
				$states = array('NJ', 'NY', 'DE');
				foreach ($states as $value) {
					echo "<option value='" . strtolower($value) . "'>" . $value . "</option>";
				}
			?>
			</select>

		</form>
	</div>
</div>
</body>
</html>