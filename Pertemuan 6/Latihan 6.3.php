<?php
class KonversiSuhu {
    private $suhu_celsius;

    public function __construct($celsius) {
        $this->suhu_celsius = $celsius;
    }

    public function getCelsius() {
        return $this->suhu_celsius;
    }

    public function keKelvin() {
        return $this->suhu_celsius + 273.15;
    }

    public function keFahrenheit() {
        return ($this->suhu_celsius * 9/5) + 32;
    }

    public function keReamur() {
        return $this->suhu_celsius * 4/5;
    }

    public function tampilkanSemuaKonversi() {
        echo "Suhu dalam Celsius = " . $this->suhu_celsius . " derajat<br>";
        echo "Suhu dalam Kelvin = " . $this->keKelvin() . " derajat<br>";
        echo "Suhu dalam Fahrenheit = " . $this->keFahrenheit() . " derajat<br>";
        echo "Suhu dalam Reamur = " . $this->keReamur() . " derajat<br>";
    }
}

$suhu = new KonversiSuhu(36);
$suhu->tampilkanSemuaKonversi();
?>
