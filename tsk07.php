<?php

$var = rand(1, 7);

	echo "<p>$var </p>";
switch ($var) {
	case 1:
	case 2:	
	case 3:
	case 4:
	case 5:

		echo "Worck day :(";
		break;
		case 6:
		case 7:
		echo "Weekend :))))";
		break;
		default:
		echo "Not a valid weekday";
		break;
}