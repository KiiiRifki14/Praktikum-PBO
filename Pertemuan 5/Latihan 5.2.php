<?php

Class warung {
    public  $namabarang;
    public $harga;

    public function __construct ($namabarang, $harga){
        $this -> namabarang = $namabarang;
        $this -> harga = $harga;  
    }
    public function informasi(){
        echo "Barang $this->namabarang harga Rp. $this->harga <br>";
    } 
}

class warung2 extends warung {
    public $exp;

    public function __construct ($namabarang, $harga, $exp){
        parent :: __construct ($namabarang, $harga);
        $this -> exp = $exp;
    }

    // overriding
    public function informasi(){
        echo "Barang $this->namabarang harga Rp. $this->harga, Kadaluarsa $this->exp <br>";
    }
}
//overriding
class warung3 extends warung {
    public function __construct() {
        // No arguments needed for warung3
    }

    public function __call($namabarang, $x){
        if ($namabarang == "total"){
            if (count($x) == 1){
                return $x[0];
            }
            else if (count($x) == 2){
                return $x[0] * $x[1];
            }
            else {
                return 0;
            }
        }
    }

}

$barang1 = new warung ("susu kotak", 6000);
$barang1 -> informasi();

$barang2 = new warung2 ("susu kotak", 6000, "15-11-2025");
$barang2 -> informasi();

$barang3 = new warung3 ();
echo "Harga indomie setelah diskon: Rp. " . $barang3 -> total (4000) . "<br>";
echo "Harga telur Rp. " . $barang3 -> total (2500, 3) . "<br>";
?>