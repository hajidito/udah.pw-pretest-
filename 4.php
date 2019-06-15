<?php
$input = array(6,22,34,15,13,26,57,42,32,2);
$arrlength = count($input);


$min = $temp = 0;
for ($i = 0 ; $i < $arrlength; $i++) {
   if ($i == 0) {
        $min = $temp = $input[$i];
   }
   if ($i > 0) {
       if ($input[$i] < $temp) {
            $min = $temp = $input[$i];
       }
   }
}

$max = $temp = 0;
for ($i = 0 ; $i < $arrlength; $i++) {
   if ($i == 0) {
        $max = $temp = $input[$i];
   }
   if ($i > 0) {
       if ($input[$i] > $temp) {
            $max = $temp = $input[$i];
       }
   }
}
echo "array: ("; 
for($x = 0; $x < $arrlength; $x++) {
    echo $input[$x].",";
}
echo ")<br>"; 
echo "data terkecil: ".$min;
echo "<br>"; 
echo "data terbesar: ".$max;
echo "<br>"; 
echo "data kecil ke besar: ";
//sort($input);
for ($i = 0; $i < $arrlength; $i++) {
    for ($j = $i + 1; $j < $arrlength; $j++) {
        if ($input[$i] > $input[$j]) {
            $temp = $input[$i];
            $input[$i] = $input[$j];
            $input[$j] = $temp;
        }
    }
}
for($x = 0; $x < $arrlength; $x++) {
    echo $input[$x].",";
}
echo "<br>"; 
//rsort($input);
for ($i = 0; $i < $arrlength; $i++) {
    for ($j = $i + 1; $j < $arrlength; $j++) {
        if ($input[$i] < $input[$j]) {
            $temp = $input[$i];
            $input[$i] = $input[$j];
            $input[$j] = $temp;
        }
    }
}
echo "data besar ke kecil: ";
for($x = 0; $x < $arrlength; $x++) {
    echo $input[$x].",";
}


//cetak_prima(10); 
?>