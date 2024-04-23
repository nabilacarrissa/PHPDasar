<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post" action="">
        Masukkan nilai angka:
        <input type="text" name="nilai">
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Fungsi untuk konversi nilai angka ke huruf
    function konversiNilai($nilai) {
        if ($nilai >= 90 && $nilai <= 100) {
            return 'A';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return 'AB';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            return 'B';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            return 'BC';
        } elseif ($nilai >= 0 && $nilai <= 59) {
            return 'C';
        }
    }

    // Proses konversi jika tombol submit ditekan
    if (isset($_POST['submit'])) {
        // Ambil nilai angka dari input
        $nilai_angka = $_POST['nilai'];

        // Validasi input
        if (!is_numeric($nilai_angka)) {
            echo "<p>Maaf, nilai yang dimasukkan harus angka.</p>";
        } else {
            // Konversi nilai angka ke huruf
            $nilai_huruf = konversiNilai($nilai_angka);
            echo "<p>Nilai angka $nilai_angka setara dengan nilai huruf $nilai_huruf.</p>";
        }
    }
    ?>
</body>
</html>
