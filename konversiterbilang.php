<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Angka ke Terbilang</title>
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>
    <form method="post">
        <label for="angkaInput">Masukkan angka (1-9): </label>
        <input type="text" name="angkaInput" id="angkaInput">
        <input type="submit" value="Konversi">
    </form>

    <?php
    // Fungsi konversi angka ke huruf
    function konversiTerbilang($angka) {
        switch ($angka) {
            case 1:
                return "satu";
            case 2:
                return "dua";
            case 3:
                return "tiga";
            case 4:
                return "empat";
            case 5:
                return "lima";
            case 6:
                return "enam";
            case 7:
                return "tujuh";
            case 8:
                return "delapan";
            case 9:
                return "sembilan";
            default:
                return "Angka tidak valid";
        }
    }

    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai angka dari form
        $angkaInput = $_POST["angkaInput"];

        // Periksa apakah input adalah angka antara 1-9
        if (!is_numeric($angkaInput) || $angkaInput < 1 || $angkaInput > 9) {
            echo "Input tidak valid. Harap masukkan angka antara 1 dan 9.";
        } else {
            // Konversi angka ke huruf
            $terbilang = konversiTerbilang($angkaInput);

            // Tampilkan hasil konversi
            echo $angkaInput . " dikonversi menjadi " . $terbilang;
        }
    }
    ?>
</body>
</html>
