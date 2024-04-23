<?php

// Definisikan variabel gaji pokok dan tunjangan jabatan
$gaji_pokok = 3250000;
$tunjangan_jabatan = 1200000;

// Hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Hitung pajak penghasilan (10% dari gaji kotor)
$pajak = $gaji_kotor * 0.1;

// Hitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Tampilkan hasil perhitungan
echo "Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak Penghasilan: Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
echo "Gaji Bersih: Rp. " . number_format($gaji_bersih, 0, ',', '.') . "<br>";

?>