<?php

// array integer [2,3,4,5,1,7,6] 
// target 8
// hitung 2 angka yang jika dijumlahkan hasilnya angka target

$Arr = [2,3,4,5,1,7,6];
$Arr_length = count($Arr);

for($i=0; $i<$Arr_length; $i++){
    for($j=$i+1; $j<$Arr_length; $j++){
        if($Arr[$i]+$Arr[$j] == 8) {
            echo "Angka ".$Arr[$i]." dan ".$Arr[$j]." jika dijumlahkan menghasilkan angka 8 \n";
       }
    }
}
