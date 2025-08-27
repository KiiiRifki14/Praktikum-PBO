<?php
Class Mobil {
    var $jumlahroda=4;
    var $Warna="Merah";
    var $bahanBakar="Pertamax";
    var $harga=120000000;
    var $merek='A';

        public function statusHarga()
        {
            if ($this-> harga > 50000000) $status = "Mahal";
            else $status = "Merah";
            return $status;
        }
}
$object1 = new Mobil();
$object2 = new Mobil();
$object3 = new Mobil();

echo $object1->statusHarga();
?>