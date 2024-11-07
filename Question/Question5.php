<!DOCTYPE html>
<html>
	<body>
		<h1>Question 5</h1>
			<?php

			$numbers = [10, 20, 30, 40, 50];
			$sum = 0;
			foreach ($numbers as $number) {
				$sum += $number;
			}
			echo "The sum of all numbers in the array is: $sum";
			?>

	</body>
</html>