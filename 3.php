<?php
function tumbuh_pohon($x,$y) 
{ 
	//if ($x > 0 and $y >0 ){
		echo "tinggi pohon : ".$x."m";
		echo "<br>"; 
		echo "selama : ".$y." tahun";
		echo "<br>"; 
		for($i=1;$i<=$y;$i++){
			$x=($x+$x)+1;
		}
		echo "jadi : ".$x."m";
		echo "<br>"; 
	//}
	//else {
		//echo "tinggi dan lama tahun harus > 0";
	//}
} 

//cetak_prima(10); 
?>

<form method="post" action="3.php">  
  tinggi awal: <input type="number" name="tinggi" min=1 value="<?php error_reporting(0); echo $_POST['tinggi']; ?>">
  lama tahun: <input type="number" name="tahun"  min=1 value="<?php error_reporting(0); echo $_POST['tahun']; ?>">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php tumbuh_pohon($_POST['tinggi'],$_POST['tahun']); ?>