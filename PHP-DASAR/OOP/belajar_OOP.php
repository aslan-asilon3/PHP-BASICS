<?php

// buat class laptop
class Laptop{

    var $pemilik;
    var $merek;
    var $ukuran_layar;

    // method untuk class laptop
    function laptop_on() {
        echo "nyalakan laptop";
    }

    function laptop_off() {
        echo "matikan laptop";
    }

}

// buat objek dari class laptop (instansiasi)
$laptop_aslan =new laptop();

// set property
$laptop_aslan->pemilik = "Aslan";

// tampilkan property
echo $laptop_aslan->pemilik;
echo "cobaa ";

// tampilkan method
echo $laptop_aslan->laptop_on();

