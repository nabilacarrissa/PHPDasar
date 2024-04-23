<?php

// Definisikan variabel jumlah uang tabungan dan pecahan uang
$uang_tabungan = 1387500;
$pecahan_uang = array(
    100000, 50000, 20000, 10000, 5000, 2000, 500
);

// Inisialisasi variabel untuk menyimpan jumlah masing-masing pecahan
$jumlah_pecahan = array();
foreach ($pecahan_uang as $pecahan) {
    $jumlah_pecahan[$pecahan] = 0;
}

// Hitung jumlah masing-masing pecahan
while ($uang_tabungan > 0) {
    foreach ($pecahan_uang as $pecahan) {
        if ($uang_tabungan >= $pecahan) {
            $jumlah_pecahan[$pecahan] = floor($uang_tabungan / $pecahan);
            $uang_tabungan -= $jumlah_pecahan[$pecahan] * $pecahan;
        }
    }
}

// Tampilkan hasil perhitungan
echo "Uang tabungan Ani: Rp. " . number_format($uang_tabungan, 0, ',', '.') . "<br>";
echo "<br>";
foreach ($pecahan_uang as $pecahan) {
    echo "Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . ": " . $jumlah_pecahan[$pecahan] . " lembar<br>";
}
?>
