<?php

$Arr = [2,3,4,5,1,7,6];
$Arr_length = count($Arr);

$i = 0;
do{
    $j = $i+1;
    do{
        if($Arr[$i]+$Arr[$j] == 8) {
            echo "Angka ".$Arr[$i]." dan ".$Arr[$j]." jika dijumlahkan menghasilkan angka 8 \n";
        }
    }while($i<$Arr_length);
}while($i<$Arr_length);