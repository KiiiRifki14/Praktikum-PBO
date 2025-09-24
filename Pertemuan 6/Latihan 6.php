<?php

class Belanja{
    Public $namaBarang;
    Public $harga;
    Public $jumlah;
    Public $total;

    public function __destruct(){
        echo "destructor : Data Belanja '$this->namaBarang' dihapus.\n";
    }
    public function __construct($namaBarang, $harga, $jumlah){
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->total = $harga * $jumlah;
        echo "consturctor : Data Belanja '$this->namaBarang' dibuat.\n";
    }
    public function getInfo(){
        return $this -> namaBarang . "(". $this -> harga ."x". $this -> jumlah.") =". $this -> total;
    }

}
echo "Masukan Jumlah Barang Belanja yang di beli : ";
$jumlah = (int)trim(string: fgets(stream:STDIN));

$barang = [];
$totalBelanja = 0;
for ($i = 1;  $i<=$jumlah; $i++){
    echo "\nBarang ke=$i\n";
    echo "Nama Barang : "; $namaBarang = trim(fgets(STDIN));
    echo "Harga Satuan : "; $harga = (int)trim(fgets(STDIN));
    echo "Jumlah : "; $jumlah = (int)trim(fgets(STDIN));

    $mie = new Belanja($namaBarang, $harga, $jumlah);
    $barang[] = $mie;
    $totalBelanja += $mie->total;
}
echo "--------------------Daftar Belanja--------------------\n";
foreach($barang as $item){
    echo $item->getInfo()."\n";
}
echo "------------------------------------------------------\n";
echo "Total Belanja Adalah : $totalBelanja\n";
$Mie = new Belanja("Indomie", 2000, 10);
?>