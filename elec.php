<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
</head>
<body>
	<h1>Electricity Bill Calculator</h1>
	<form method="post">
		<label for="units">Enter number of units:</label>
		<input type="number" id="units" name="units" required><br><br>
		<input type="submit" value="Calculate">
	</form>
	<br>
	<?php
		if(isset($_POST['units'])) {
			$units = $_POST['units'];
			$total_bill = 0;
			if($units <= 50) {
				$total_bill = $units * 3.50;
			}
			elseif($units <= 150) {
				$total_bill = (50 * 3.50) + (($units - 50) * 4.00);
			}
			elseif($units <= 250) {
				$total_bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
			}
			else {
				$total_bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
			}
			echo "<h3>Total units consumed: $units</h3>";
			echo "<h3>Total bill: Rs $total_bill</h3>";
		}
	?>
</body>
</html>
