<?php
class Kendaraan {
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setMerek($merek) {
        $this->merek = $merek;
    }
    function getMerek() {
        return $this->merek;
    }
    function setjmlroda($jmlroda) {
        $this->jmlroda = $jmlroda;
    }
    function getjmlroda() {
        return $this->jmlroda;
    }
    function setHarga($harga) {
        $this->harga = $harga;
    }
    function getHarga() {
        return $this->harga;
    }
    function setwarna($warna) {
        $this->warna = $warna;
    }
    function getwarna() {
        return $this->warna;
    }
    function setbhnbakar($bhnbakar) {
        $this->bhnbakar = $bhnbakar;
    }
    function getbhnbakar() {
        return $this->bhnbakar;
    }
    function settahun($tahun) {
        $this->tahun = $tahun;
    }
    function gettahun() {
        return $this->tahun;
    }

    function statusHarga() {
        if ($this->harga > 10000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    function dapatSubsidi() {
        if ($this->bhnbakar == "Premium" && $this->tahun < 2005) {
            return "Ya";
        } else {
            return "Tidak";
        }
    }

    function hargaSecondKendaraan() {
        return $this->harga * 0.7;
    }
}

$Data1 = array('Toyota Yaris','4','160000000','Merah','Pertamax','2014');
$Data2 = array('Honda Scoopy','2','13000000','Putih','Premium','2005');
$Data3 = array('Isuzu Panther','4','40000000','Hitam','Solar','1994');

for($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setjmlroda(${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
    ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
    ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
    ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
}

for($i = 1; $i <= 3; $i++) {
    echo ${"kendaraan$i"}->getMerek()."<br>"
        .${"kendaraan$i"}->getjmlroda()."<br>"
        .${"kendaraan$i"}->getHarga()."<br>"
        .${"kendaraan$i"}->getwarna()."<br>"
        .${"kendaraan$i"}->getbhnbakar()."<br>"
        .${"kendaraan$i"}->gettahun()."<br>"
        .${"kendaraan$i"}->statusHarga()."<br>"
        .${"kendaraan$i"}->dapatSubsidi()."<br>"
        .${"kendaraan$i"}->hargaSecondKendaraan()."<br><br>";
}
?>
