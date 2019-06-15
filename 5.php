<form method="post" action="5.php">  
  string: <input type="text" name="string" value="<?php error_reporting(0); echo $_POST['string']; ?>">
  frasa: <input type="text" name="frasa"  value="<?php error_reporting(0); echo $_POST['frasa']; ?>">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
	$str=$_POST['string'];
	$frasa=$_POST['frasa'];
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