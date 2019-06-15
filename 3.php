<?php
function tumbuh_pohon($x,$y) 
{ 
	if ($x > 0 and $y >0 ){
		echo "tinggi pohon : ".$x."m";
		echo "<br>"; 
		echo "selama : ".$y." tahun";
		echo "<br>"; 
		for($i=1;$i<=$y;$i++){
			$x=($x+$x)+1;
		}
		echo "jadi : ".$x."m";
		echo "<br>"; 
	}
	else {
		echo "tinggi dan lama tahun harus > 0";
	}
} 

tumbuh_pohon(1,5);

//cetak_prima(10); 
?>