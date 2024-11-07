<!DOCTYPE html>
<html>
	<body>
			<h1>Question 6</h1>
			<?php

			function greet($name) {
				return "Hello " . $name . " !";
			}
			$name = "Alice"; 
			$message = greet($name);
			echo $message;
			?>
	</body>
</html>
