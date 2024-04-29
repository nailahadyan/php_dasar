<?php
// Jumlah uang tabungan Ani
$tabungan = 1387500;

// Daftar pecahan uang yang berlaku
$pecahan = array(
    100000 => 0,
    50000  => 0,
    20000  => 0,
    10000  => 0,
    5000   => 0,
    2000   => 0,
    500    => 0
);

// Menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan as $nilai => $jumlah) {
    while ($tabungan >= $nilai) {
        $tabungan -= $nilai;
        $pecahan[$nilai]++;
    }
}

// Menampilkan hasil
echo "Jumlah uang pecahan yang diperoleh Ani:\n<br>";
foreach ($pecahan as $nilai => $jumlah) {
    echo "- Rp. " . number_format($nilai) . " = " . $jumlah . " lembar<br>";
}
?>
