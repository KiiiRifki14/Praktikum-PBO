<?php
Class employee{
   public $jabatan;
   public $gaji;
   public $lamakerja;

    public function __construct($jabatan, $gaji, $lamakerja){
        $this -> jabatan = $jabatan;
        $this -> gaji = $gaji;
        $this -> lamakerja = $lamakerja;
    }
    public function info(){
        echo "Jabatan: {$this->jabatan} <br>";
        echo "Gaji: Rp. {$this->gaji} <br>";
        echo "Lama Kerja: {$this->lamakerja} tahun <br>";
    }
}
class programmer extends employee {
    public function __construct($jabatan, $gaji, $lamakerja) {
        parent::__construct($jabatan, $gaji, $lamakerja);
    }
    public function hitungBonus(){
        if ($this-> lamakerja <1 ){
            return 0;
        }elseif ($this-> lamakerja >=1 && $this-> lamakerja <=10){
            return 0.01 * $this-> lamakerja * $this-> gaji;
        }
        else{ //lebih dari 10 tahun
            return 0.02 * $this-> lamakerja * $this-> gaji;
        }
    }
    public function totalGaji(){
        return $this-> gaji + $this-> hitungBonus();
    }
    public function info(){
        parent::info();
        echo "Bonus: Rp. " . $this-> hitungBonus() . "<br>";
        echo "Total Gaji: Rp. " . $this-> totalGaji() . "<br>";
    }
}
class direktur extends employee {
    public function __construct($jabatan, $gaji, $lamakerja) {
        parent::__construct($jabatan, $gaji, $lamakerja);
    }
    public function hitungBT(){
        if ($this -> lamakerja >= 1){
            return 0.5 * $this -> lamakerja *$this -> gaji + 0.1 * $this -> lamakerja * $this -> gaji;
        }
    }
    public function totalGaji(){
        return $this-> gaji + $this-> hitungBT();
    }
    public function info(){
        parent::info();
        echo "Tunjangan dan Bonus: Rp. " . $this-> hitungBT() . "<br>";
        echo "Total Gaji: Rp. " . $this-> totalGaji() . "<br>";
    }
}
class pegawaiMingguan extends employee {
    public $hargaBarang;
    public $stockBarang;
    public $penjualan;

    public function __construct($jabatan, $gaji, $lamakerja, $hargaBarang, $stockBarang, $penjualan) {
        parent::__construct($jabatan, $gaji, $lamakerja);
        $this->hargaBarang = $hargaBarang;
        $this->stockBarang = $stockBarang;
        $this->penjualan = $penjualan;
    }

    public function hitungTambahanGaji() {
        $totalPenjualan = $this->penjualan;
        $stock = $this->stockBarang;
        $harga = $this->hargaBarang;

        if ($totalPenjualan > 0.7 * $stock) {
            return 0.10 * $harga * $totalPenjualan;
        } else {
            return 0.03 * $harga * $totalPenjualan;
        }
    }

    public function totalGaji() {
        return $this->gaji + $this->hitungTambahanGaji();
    }

    public function info() {
        parent::info();
        echo "Harga Barang: Rp. " . $this->hargaBarang . "<br>";
        echo "Stock Barang: " . $this->stockBarang . "<br>";
        echo "Penjualan: " . $this->penjualan . "<br>";
        echo "Tambahan Gaji: Rp. " . $this->hitungTambahanGaji() . "<br>";
        echo "Total Gaji: Rp. " . $this->totalGaji() . "<br>";
    }
}
$Programmer1 = new programmer("Programmer Junior", 5000000, 2);
echo "<b>Programmer 1</b><br>";
$Programmer1 -> info();
echo "<br>";

$Direktur1 = new direktur("Direktur Utama", 2000000, 5);
echo "<b>Direktur 1</b><br>";
$Direktur1 -> info();
echo "<br>";

$PegawaiMingguan1 = new pegawaiMingguan("Pegawai Mingguan", 3000000, 1, 100000, 100, 80);
echo "<b>Pegawai Mingguan 1</b><br>";
$PegawaiMingguan1->info();
echo "<br>";
?>