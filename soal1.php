<?php

// Definisikan variabel gaji pokok dan tunjangan jabatan
$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;

// Hitung gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan;

// Hitung pajak penghasilan
$pajakPenghasilan = 0.1 * $gajiKotor;

// Hitung gaji bersih
$gajiBersih = $gajiKotor - $pajakPenghasilan;

// Tampilkan hasil perhitungan
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak Penghasilan: Rp. " . number_format($pajakPenghasilan, 0, ',', '.') . "<br>";
echo "Gaji Bersih: Rp. " . number_format($gajiBersih, 0, ',', '.') . "<br>";