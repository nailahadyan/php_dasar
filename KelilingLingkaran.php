<?php

// Mendefinisikan nilai jari-jari lingkaran
echo "Diketahui jari-jari sebuah lingkaran: 15 cm\n<br>";
$jariJariLingkaran = 15; // cm

// Mempertanyakan keliling lingkaran
echo "Untuk menghitung keliling lingkaran, digunakan rumus: keliling = 2 × π × jari-jari\n<br>";

// Menghitung keliling lingkaran
$kelilingLingkaran = 2 * pi() * $jariJariLingkaran;

// Memformat dan menampilkan hasil
$kelilingLingkaranDiformat = number_format($kelilingLingkaran, 2); // Format ke 2 angka desimal
echo "Maka hasil keliling lingkarannya adalah " . $kelilingLingkaranDiformat . " cm\n";

?>
