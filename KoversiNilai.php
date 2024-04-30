<?php
// Fungsi untuk mengkonversi nilai angka ke huruf
function konversiNilai($nilai) {
    if ($nilai >= 90 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai >= 80 && $nilai < 90) {
        return 'AB';
    } elseif ($nilai >= 70 && $nilai < 80) {
        return 'B';
    } elseif ($nilai >= 60 && $nilai < 70) {
        return 'BC';
    } elseif ($nilai >= 0 && $nilai < 60) {
        return 'C';
    } else {
        return 'Nilai tidak valid';
    }
}

$nilaiAngka = 85; 
$nilaiHuruf = konversiNilai($nilaiAngka);
echo "Nilai huruf untuk angka $nilaiAngka adalah $nilaiHuruf";
?>
