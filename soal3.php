<?php
// Array siswa dengan nomor urut, poin, dan nama
$siswa = array(
    array("No Urut" => 1, "Poin" => 75, "Nama" => "Adi"),
    array("No Urut" => 2, "Poin" => 80, "Nama" => "Joni"),
    array("No Urut" => 3, "Poin" => 65, "Nama" => "Jihan"),
    array("No Urut" => 4, "Poin" => 70, "Nama" => "Aya"),
    array("No Urut" => 5, "Poin" => 85, "Nama" => "Ita"),
    array("No Urut" => 6, "Poin" => 90, "Nama" => "Budi"),
    array("No Urut" => 7, "Poin" => 95, "Nama" => "Tini"),
    array("No Urut" => 8, "Poin" => 65, "Nama" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5: ";
foreach ($siswa as $s) {
    if ($s["No Urut"] == 5) {
        echo $s["Poin"] . "<br>\n";
        break;
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Nama siswa dengan poin 90: \n";
foreach ($siswa as $s) {
    if ($s["Poin"] == 90) {
        echo $s["Nama"] . "\n";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "Nama siswa dengan poin 100: \n";
$adaPoin100 = false;
foreach ($siswa as $s) {
    if ($s["Poin"] == 100) {
        $adaPoin100 = true;
        echo $s["Nama"] . "\n";
    }
}
if (!$adaPoin100) {
    echo "Tidak ada\n";
}
?>
