<?php

class LuasLingkaran{
    function Lingkaran($p, $r){
        // int $hasil;
        $hasil = $p*$r**2;
        return $hasil ;
    }
    
}

class VolumeBola{
    function Bola()
}

$LuasLingkaran = new LuasLingkaran();
echo "Hasil Luas Lingkaran Yaitu ". $LuasLingkaran->Lingkaran(2,3);