<!DOCTYPE html>
<html>
	<body>
		<h1>Question 8</h1>
		<?php

		$sum = 0;
		$number = 2; 
		while ($number <= 100) {
			$sum += $number;
			$number += 2;
		}
		echo "The sum of all even numbers between 1 and 100 is: $sum";
		?>
     </body>
</html>