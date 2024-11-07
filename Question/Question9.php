<!DOCTYPE html>
<html>
	<body>
		<h1>Question 9</h1>
		<?php
		$number = 2; 
		echo "Multiplication Table for $number:<br>";
		for ($i = 1; $i <= 10; $i++) {
			$result = $number * $i;
			echo "$number x $i = $result<br>";
		}
		?>
		</body>
</html>
