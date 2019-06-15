<?php
error_reporting(0);
	$str="banananana";
	$frasa="nana";
	$strsplit = str_split($str);
	$frasasplit = str_split($frasa);
	$countstrsplit = count($strsplit);
	$countfrasasplit = count($frasasplit);
		$jumlahketemu=0;
		for($x = 0; $x < $countstrsplit; $x++) {
			if ($strsplit[$x] == $frasasplit[0]){
				$jumlahcocok=1;
				for($y = 1; $y < $countfrasasplit; $y++) {
					$z=$x+$y;
					if ($strsplit[$z] == $frasasplit[$y]){
						$jumlahcocok++;
					}
				}
				if($jumlahcocok == $countfrasasplit){
					$jumlahketemu++;
				}
			}
		}
		
		for($x = $countstrsplit; $x > 0; $x--) {
			if ($strsplit[$x] == $frasasplit[0]){
				$jumlahcocok=1;
				for($y = 1; $y < $countfrasasplit; $y++) {
					$z=$x-$y;
					if ($strsplit[$z] == $frasasplit[$y]){
						$jumlahcocok++;
					}
				}
				if($jumlahcocok == $countfrasasplit){
					$jumlahketemu++;
				}
			}
		}
		
	echo "kata : ".$str;
	echo "<br>";
	echo "frasa : ".$frasa;
	echo "<br>";
	echo "ditemukan ".$jumlahketemu." kali";
?>