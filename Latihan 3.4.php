<?php
Class BarangHarian{
    private $namaBarang = "Mie Instan";
    private $Harga;
    private $jumlah;
    private $status;

    function setNamaBarang($namaBarang){
        $this->namaBarang = $namaBarang;
    }
    function getNamaBarang(){
        return $this->namaBarang;
    }

    function setHarga($Harga){
        $this->Harga = $Harga;
    }
    function getHarga(){
        return $this->Harga;
    }

    function setJumlah($jumlah){
        $this->jumlah = $jumlah;
    }
    function getJumlah(){
        return $this->jumlah;
    }

    function setStatus($status){
        $this->status = $status;
    }
    function getStatus(){
        return $this->status;
    }

    function hitungTotalPembayaran(){
        $Total = $this->Harga * $this->jumlah;
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
$barang1->setHarga(15000);
$barang1->setJumlah(4);

$barang2 = new BarangHarian();
$barang2->setNamaBarang("Kopi");
$barang2->setHarga(3000);
$barang2->setJumlah(5);

$barang3 = new BarangHarian();
$barang3->setNamaBarang("Air Mineral");
$barang3->setHarga(5000);
$barang3->setJumlah(5);

echo $barang1->getNamaBarang(); echo "<br>";
echo $barang1->getHarga(); echo "<br>";
echo $barang1->hitungTotalPembayaran(); echo "<br>"; 
echo $barang1->statusPembayaran(); echo "<br>"; echo "<br>";

echo $barang2->getNamaBarang(); echo "<br>";
echo $barang2->getHarga(); echo "<br>";
echo $barang2->hitungTotalPembayaran(); echo "<br>"; 
echo $barang2->statusPembayaran(); echo "<br>"; echo "<br>";

echo $barang3->getNamaBarang(); echo "<br>";
echo $barang3->getHarga(); echo "<br>";
echo $barang3->hitungTotalPembayaran(); echo "<br>"; 
echo $barang3->statusPembayaran(); echo "<br>"; echo "<br>";

$TotalBelanja;

?>
