<?php
//latihan binary search

function Cari($list, $item){
    $low = 0;
    $height = strlen($list)-1;

    while ($low <= $height){
        $mid = floor(($low+$height)/2);
        $guess = $list($mid);
        if($guess==$item){
            return $mid;
        }elseif($guess>$item){
            $height = $mid-1;
        }else{
            $low = $mid+1;
        }
        return "kosong";
    }

    $mylist = [1,3,5,7,9];
    echo "Hasil pencarian adalah " .Cari($mylist, 3);




}