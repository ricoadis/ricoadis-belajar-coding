<?php
	// siapkan 2 angka awal
	//$x=0;
	//$y=1;
	$x = 0;
	$y = 1;

	//tampilkan 2 angka awal
	echo "$x $y";
	 
	for ($i=0; $i<8; $i++)
	{
		// hitung angka yang akan ditampilkan
		$output = $y + $x;
		echo " $output";
		
		//siapkan angka untuk perhitungan berikutnya
		$x = $y;
		$y = $output;
	}
?>
