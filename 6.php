
<form method="post" action="6.php">  
  masukan angka desimal: <input type="number" name="angka" value="<?php error_reporting(0); echo $_POST['angka']; ?>">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

$dec=$_POST['angka'];
$binStr = '';
while ($dec>=1){
    $bin = $dec % 2;
    $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
    $binStr .= $bin;
}
$binStr = strrev($binStr);
echo "angka biner: ".$binStr;

?>