<?php
Class BarangHarian{
    var $namaBarang = "Mie Instan";
    var $Harga;
    var $jumlah;
    var $status;

    function hitungTotalPembayaran(){
        $Total = $this -> Harga * $this -> jumlah;
        return $Total;
    }
    function statusPembayaran(){
        $Total = $this->hitungTotalPembayaran();
        if ($Total > 50000) {
             return "Mahal";
            
        } else {
             return "Murah";
        }
    }
}

//"Mie intasn, Kopi, Air Mineral"
$barang1 = new BarangHarian();
$barang1 -> Harga = 15000;
$barang1 -> jumlah = 4;

$barang2 = new BarangHarian();
$barang2 -> namaBarang = "Kopi";
$barang2 -> Harga = 3000;
$barang2 -> jumlah = 5;

$barang3 = new BarangHarian();
$barang3 -> namaBarang = "Air Mineral";
$barang3 -> Harga = 5000;
$barang3 -> jumlah = 5;

echo $barang1 -> namaBarang; echo "<br>";
echo $barang1 -> Harga; echo "<br>";
echo $barang1 -> hitungTotalPembayaran(); echo "<br>"; 
echo $barang1 -> statusPembayaran(); echo "<br>"; echo "<br>";

echo $barang2 -> namaBarang; echo "<br>";
echo $barang2 -> Harga; echo "<br>";
echo $barang2 -> hitungTotalPembayaran(); echo "<br>"; 
echo $barang2 -> statusPembayaran(); echo "<br>"; echo "<br>";

echo $barang3 -> namaBarang; echo "<br>";
echo $barang3 -> Harga; echo "<br>";
echo $barang3 -> hitungTotalPembayaran(); echo "<br>"; 
echo $barang3 -> statusPembayaran(); echo "<br>"; echo "<br>";

?>