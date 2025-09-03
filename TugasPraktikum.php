<?php
class KalkulatorDiskon {
    private $Kartu;
    private $TotalBelanja;
    private $Diskon;
    private $TotalBayar;

    function setKartu($Kartu) {
        $this->Kartu = $Kartu;
    }

    function getKartu() {
        return $this->Kartu;
    }

    function setTotalBelanja($TotalBelanja) {
        $this->TotalBelanja = $TotalBelanja;
    }

    function getTotalBelanja() {
        return $this->TotalBelanja;
    }

    function getDiskon() {
        return $this->Diskon;
    }

    function getTotalBayar() {
        return $this->TotalBayar;
    }

    function hitungDiskon() {
        $this->Diskon = 0;
        if ($this->Kartu == "ya") {
            if ($this->TotalBelanja > 500000) {
                $this->Diskon = 50000;
            } elseif ($this->TotalBelanja > 100000) {
                $this->Diskon = 15000;
            } else {
                $this->Diskon = 0;
            }
        } elseif ($this->Kartu == "tidak") {
            if ($this->TotalBelanja > 100000) {
                $this->Diskon = 5000;
            } else {
                $this->Diskon = 0;
            }
        } else {
            $this->Diskon = 0;
        }
        $this->TotalBayar = $this->TotalBelanja - $this->Diskon;
    }

    function tampilkanHasil() {
        echo "Apakah ada kartu member: " . $this->Kartu . "<br>";
        echo "Total belanja: " . number_format($this->TotalBelanja, 0, ',', '.') . "<br>";
        echo "Total Bayar: Rp " . number_format($this->TotalBayar, 0, ',', '.') . "<br>";
    }
}

$calculator1 = new KalkulatorDiskon();
$calculator1 ->setKartu("ya");
$calculator1 ->setTotalBelanja(200000);
$calculator1 ->hitungDiskon();
$calculator1 ->tampilkanHasil(); echo "<br>";

$calculator2 = new KalkulatorDiskon();
$calculator2 ->setKartu("ya");
$calculator2->setTotalBelanja(570000);
$calculator2 ->hitungDiskon();
$calculator2 ->tampilkanHasil(); echo "<br>";

$calculator3 = new KalkulatorDiskon();
$calculator3 ->setKartu("tidak");
$calculator3->setTotalBelanja(120000);
$calculator3 ->hitungDiskon();
$calculator3 ->tampilkanHasil(); echo "<br>";

$calculator4 = new KalkulatorDiskon();
$calculator4 ->setKartu("tidak");
$calculator4->setTotalBelanja(90000);
$calculator4 ->hitungDiskon();
$calculator4 ->tampilkanHasil(); echo "<br>";
?>
