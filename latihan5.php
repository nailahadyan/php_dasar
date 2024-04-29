<?php
// Mendefinisikan variabel warna
$warna = "merah";

// Menggunakan switch-case untuk menentukan pesan berdasarkan warna
switch ($warna) {
    case "merah":
        echo "warna adalah merah";
        break;
    case "kuning":
        echo "warna adalah kuning";
        break;
    case "hijau":
        echo "Warna adalah hijau";
        break;
    default:
        echo "warna tidak dikenal!";
}

echo "<br>";
?>
