<?php

$num = 1;

while ($num <= -20) {
	echo $num-- . ', ';
}
echo "<br><br><br>";

$num = 0;
	while ($num <= 20) {
		echo ++$num ;

		if ($num !=20) {
			echo ",";
		} else {
			break;
		}

	}


	
