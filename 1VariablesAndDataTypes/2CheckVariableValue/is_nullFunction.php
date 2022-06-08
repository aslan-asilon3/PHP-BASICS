<?php 

// is_null() akan mengembalikan nilai true jika
// variabel belum didefinisikan dan 
// akan mengembalikan pesan/catatan ketika
// variabel  belum di definisikan 

$a = 10;
$b = NULL;

echo is_null($a) ? "True" : "False" ;
echo "\n";
echo is_null($b) ? "True" : "False" ;
