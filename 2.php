<?php
function cetak_segitiga($n) 
{ 
   //if ($n > 0 and $n <10 ){
	for ($i=$n;$i>=1;$i--){
		$x=2;
		for ($j=$i;$j<=$n;$j++){
			$a=0;
			while ($a != 2){
			$a=0;
			for ($y=1;$y<=$x;$y++){
				if ($x % $y == 0){
					$a++;
				}
			}
			if ($a==2){
				echo $x." ";
			}
			$x++;
			}
		}	
		echo "<br>";
	}
   //}
   //else{
	//echo "tinggi dan alas harus > 0 dan < 10";
   //}
    
} 

?>

<form method="post" action="2.php">  
  masukan alas dan tinggi: <input type="number" name="angka" min=1 max=9 value="<?php error_reporting(0); echo $_POST['angka']; ?>">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php cetak_segitiga($_POST['angka']); ?>
