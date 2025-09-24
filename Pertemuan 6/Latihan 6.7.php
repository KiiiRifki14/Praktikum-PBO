<?php
class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;

    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        echo "Objek untuk karyawan '" . $this->nama . "' telah dibuat.\n";
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }

    public function getGajiPokok() {
        switch ($this->golongan) {
            case "Ib": return 1250000;
            case "Ic": return 1300000;
            case "Id": return 1350000;
            case "IIa": return 2000000;
            case "IIb": return 2100000;
            case "IIc": return 2200000;
            case "IId": return 2300000;
            case "IIIa": return 2400000;
            case "IIIb": return 2500000;
            case "IIIc": return 2600000;
            case "IIId": return 2700000;
            case "IVa": return 2800000;
            case "IVb": return 2900000;
            case "IVc": return 3000000;
            case "IVd": return 3100000;
            default: return 0;
        }
    }
    
    public function getUangLembur() {
        return $this->jamLembur * 15000;
    }
    
    public function getTotalGaji() {
        return $this->getGajiPokok() + $this->getUangLembur();
    }

    public function __destruct() {
        echo "--> Objek untuk karyawan '" . $this->nama . "' telah dihapus.\n";
    }
}

echo "=========================================\n";
echo " PROGRAM MENGHITUNG GAJI KARYAWAN\n";
echo "=========================================\n";

echo "Masukkan Nama Karyawan: ";
$inputNama = trim(fgets(STDIN));
echo "Masukkan Golongan (contoh: IIIc): ";
$inputGolongan = trim(fgets(STDIN));
echo "Masukkan Total Jam Lembur: ";
$inputJamLembur = (int)trim(fgets(STDIN));
echo "\n";

$karyawan = new Karyawan($inputNama, $inputGolongan, $inputJamLembur);

$dataGaji = [
    'nama' => $karyawan->getNama(),
    'golongan' => $karyawan->golongan,
    'jam_lembur' => $karyawan->jamLembur,
    'total_gaji' => $karyawan->getTotalGaji()
];

echo "\n";

echo "================ HASIL PERHITUNGAN ================\n";
echo "Nama Karyawan   : " . $dataGaji['nama'] . "\n";
echo "Golongan        : " . $dataGaji['golongan'] . "\n";
echo "Total Jam Lembur: " . $dataGaji['jam_lembur'] . " Jam\n";
echo "Total Gaji      : Rp " . number_format($dataGaji['total_gaji'], 2, ',', '.') . "\n";
echo "===================================================\n";

echo "\n";

?>
