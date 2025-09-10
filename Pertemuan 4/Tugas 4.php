<?php
class BangunRuang {
    var $jenis;
    var $sisi;
    var $jari;
    var $tinggi;
    var $volume;

    function setJenis($jenis) {
        $this->jenis = $jenis;
    }
    function getJenis() {
        return $this->jenis;
    }
    function setSisi($sisi) {
        $this->sisi = $sisi;
    }
    function getSisi() {
        return $this->sisi;
    }
    function setJari($jari) {
        $this->jari = $jari;
    }
    function getJari() {
        return $this->jari;
    }
    function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }
    function getTinggi() {
        return $this->tinggi;
    }
    function setVolume($volume) {
        $this->volume = $volume;
    }
    function getVolume() {
        return $this->volume;
    }

    function hitungVolume() {
        switch ($this->jenis) {
            case "Bola":
                $this->volume = (4/3) * 3.14 * pow($this->jari, 3);
                break;
            case "Kerucut":
                $this->volume = (1/3) * 3.14  * pow($this->jari, 2) * $this->tinggi;
                break;
            case "Limas Segi Empat":
                $this->volume = ($this->sisi * $this->sisi) * $this->tinggi / 3;
                break;
            case "Kubus":
                $this->volume = pow($this->sisi, 3);
                break;
            case "Tabung":
                $this->volume = 3.14  * pow($this->jari, 2) * $this->tinggi;
                break;
            default:
                $this->volume = 0;
        }
    }
}

$dataBangun = [
    ["jenis" => "Bola", "sisi" => 0, "jari" => 7, "tinggi" => 0],
    ["jenis" => "Kerucut", "sisi" => 0, "jari" => 14, "tinggi" => 10],
    ["jenis" => "Limas Segi Empat", "sisi" => 8, "jari" => 0, "tinggi" => 24],
    ["jenis" => "Kubus", "sisi" => 30, "jari" => 0, "tinggi" => 0],
    ["jenis" => "Tabung", "sisi" => 0, "jari" => 7, "tinggi" => 10],
];

$bangunObjects = [];

foreach ($dataBangun as $data) {
    $obj = new BangunRuang();
    $obj->setJenis($data["jenis"]);
    $obj->setSisi($data["sisi"]);
    $obj->setJari($data["jari"]);
    $obj->setTinggi($data["tinggi"]);
    $obj->hitungVolume();
    $bangunObjects[] = $obj;
}

foreach ($bangunObjects as $obj) {
    echo "Jenis Bangun Ruang: " . $obj->getJenis() . "<br>";
    echo "Sisi: " . $obj->getSisi() . "<br>";
    echo "Jari-jari: " . $obj->getJari() . "<br>";
    echo "Tinggi: " . $obj->getTinggi() . "<br>";
    echo "Volume: " . $obj->getVolume() . "<br><br>";
}
?>
