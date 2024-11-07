<!DOCTYPE html>
<html>
	<body>
		<h1>Question 7</h1>
		<?php
		define("PI", 3.14159);

		function calculateCircumference($radius) {
			return 2 * PI * $radius;
		}

		$radius = 2;
		$circumference = calculateCircumference($radius);
		echo "The circumference of a circle with radius $radius is: $circumference";
		?>
</body>
</html>
