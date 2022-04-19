<?php
//pembuatan fungsi
function Perkalian($angka1, $angka2)
{
   $a= $angka1;
   $b= $angka2;
   $hasil= $a*$b;
   echo "maka hasilnya ". $hasil;
   return $hasil;
}

function Logaritma()
{
    $a = log(2);
    $b = round($a,1);
    echo $b;
}