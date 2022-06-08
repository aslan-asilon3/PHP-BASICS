<?php

// array integer [2,3,4,5,1,7,6] 
// target 8
// hitung 2 angka yang jika dijumlahkan hasilnya angka target

$Arr = [2,3,4,5,1,7,6];
$Arr_length = count($Arr);

$i = 0;
while($i<$Arr_length){
    $j = $i+1;
    while($i<$Arr_length){
        if($Arr[$i]+$Arr[$j] == 8) {
            echo "Angka ".$Arr[$i]." dan ".$Arr[$j]." jika dijumlahkan menghasilkan angka 8 \n";
        }
    }
}
