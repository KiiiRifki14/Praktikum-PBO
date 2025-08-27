<?php
//Data Awal
$pinjaman = 1000000;
$besarBunga = 10;
$lamaAngsuran = 5;
$keterlambatan = 40;
$dendaPerhari = 0.0015;

//Hitung Total Pinjaman
$totalPinjaman = $pinjaman + ( $pinjaman * $besarBunga/100);

//Hitung Angsuran Bulanan
$angsuranBulanan = $totalPinjaman / $lamaAngsuran;

//Hitung Denda Keterlambatan
$dendaKeterlambatan = $angsuranBulanan * $dendaPerhari * $keterlambatan;

//Hitung besar pembayaran
$besarPembayaran = $angsuranBulanan + $dendaKeterlambatan;

// --- OUTPUT ---
echo "================================", "<br>";
echo "TOKO PEGADAIAN SYARIAH", "<br>";
echo "Jl Keadilan No 16", "<br>";
echo "Telp. 73253459", "<br>";
echo "================================", "<br>";
echo "<br>";
echo "Pinjaman Awal: Rp ". number_format($pinjaman, 0, ',', '.'), "<br>";
echo "<br>";
echo "Total Pinjaman: Rp " . number_format($totalPinjaman, 0, ',', '.') . "<br>";
echo "Angsuran per Bulan: Rp " . number_format($angsuranBulanan, 0, ',', '.') . "<br>";
echo "Denda Keterlambatan (40 hari): Rp " . number_format($dendaKeterlambatan, 0, ',', '.') . "<br>";
echo "<b>Total Pembayaran (Angsuran + Denda): Rp " . number_format($besarPembayaran, 0, ',', '.') . "</b>";
?>