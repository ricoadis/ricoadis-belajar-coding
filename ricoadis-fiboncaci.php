<?php
	$x = 0;
	$y = 1;
	echo "$x $y";
	 
	for ($i=0; $i<8; $i++)
	{
		$output = $y + $x;
		echo " $output";

		$x = $y;
		$y = $output;
	}
?>
