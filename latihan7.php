<?php
// Array namaBuah
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

// Menampilkan beberapa buah
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . ", " . $namaBuah[2] . ", ";

// Menampilkan satu buah lagi
echo "saya suka " . $namaBuah[1] . "<br>";
echo "saya suka " . $namaBuah[2] . "<br>";
echo "saya suka " . $namaBuah[3] . "<br>";
echo "saya suka " . $namaBuah[4] . "<br>";

// Array umur
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "40 Tahun");
// Menambahkan umur Ahmad
$umur['Ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'] . "<br>";

// Menampilkan umur semua orang
foreach ($umur as $nama => $umur) {
    echo "Umur $nama adalah $umur<br>";
}
?>
