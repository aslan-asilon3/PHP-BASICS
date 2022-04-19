<?php
class Hashmap {
     
    private $hashmap = [];
 
    // Deklarasi key dan value
    public function put($key, $val) {
        $this->hashmap[$key] = $val;
    }
 
    // Mendapatkan value berdasarkan key
    public function get($key) {
        if (in_array($key, $this->hashmap)) {
            return $this->hashmap[$key];
        }
        return null;
    }
 
    // Menghapus key & value berdasarkan key
    public function remove($key) {
        if (in_array($key, $this->hashmap)) {
            unset($this->hashmap[$key]);
        } 
    }
 
    // Menghapus semua key & value
    public function clear() {
        unset($this->hashmap);
    }
}

$Arr = [2,3,4,5,1,7,6];
$val = Hashmap::get($Arr);
$Arr_length = count($Arr);
$val = Hashmap::get($Arr_length);

$hashmap = new Hashmap();
$hashmap->put(1, 20);
// $hashmap->put(50, 100);
// $hashmap->put(20, 50);
 
// Mendapatkan value pada key 50
echo $hashmap->get(50);
 
// Menghapus key & value berdasarkan key 20
$hashmap->remove(20);