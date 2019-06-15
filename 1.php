<?php
	
	$budget = 50000;
	$hargami = 2500;
	echo "budget : ".$budget."<br>";
	echo "harga mie : ".$hargami."<br>";
	echo "promo beli 4 gratis 1 <br>";
	echo "mie yang didapat : ". (($budget / $hargami) + ($budget / ($hargami*4)) )."<br>";

?>