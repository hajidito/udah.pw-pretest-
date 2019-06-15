<?php
function cetak_segitiga($n) 
{ 
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
    
} 

cetak_segitiga(5);
?>