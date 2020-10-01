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

	// hasil: 
	// 0 1 1 2 3 5 8 13 21 34
?>
