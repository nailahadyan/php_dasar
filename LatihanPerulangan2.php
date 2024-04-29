<?php
// Mendefinisikan array angka
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

// Melakukan perulangan untuk setiap elemen dalam array
foreach ($angka as $value) {
    // Mengecek apakah angka tersebut genap atau ganjil
    // dan mencetak hasilnya
    if ($value % 2 == 0) {
        echo "Nomor : $value Genap<br>";
    } else {
        echo "Nomor : $value Ganjil<br>";
    }
}
?>