<!DOCTYPE html>
<html>
	<body>
		<h1>Question 4</h1>
		<?php
function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid number. Please enter a number between 1 and 7.";
    }
}


$number = 6; 
$day = getDayOfWeek($number);
echo "The day corresponding to number $number is: $day";
?>
</body>
</html>
