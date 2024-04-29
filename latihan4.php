<?php
// Mendapatkan jam dalam format 24-jam
$t = date("H");

// Menampilkan ucapan berdasarkan waktu
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Siang!";
} elseif ($t < 20) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}
?>
