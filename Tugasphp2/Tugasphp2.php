<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <link rel="stylesheet" href="./stylephp2.css">
</head>
<body>
<h2>MASUKAN GAJI KARYAWAN PT XYZ</h2>
    <form action="" method="post">
        <label for=""> Jabatan :</label>
        <select name="jabatan" id="jabatan">
            <option value="">----- Pilih Jabatan -----</option>
            <option value="manager">Manager</option>
            <option value="asisten">Asisten</option>
            <option value="kabag">Kabag</option>
            <option value="staff">Staff</option>
        </select>
        <br>
        <label for="">Agama :</label>
        <select name="agama" id="agama">
            <option value="">----- Pilih Agama -----</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kriten</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
        </select>
        <br>
        <label for="status">Status:</label>
            <input type="radio" name="status" id="menikah" value="Menikah">Menikah
            <input type="radio" name="status" id="belum_menikah" value="Belum Menikah"> Belum Menikah
        <br>
        <label for="jml_anak">Jumlah Anak:</label>
        <input type="number" name="jml_anak" id="jml_anak" min="0" max="5">
        <br>
        <input type="submit" value="Hitung Gaji">
    </form>
    <?php
    echo"<div class='result'>";
        if (isset($_GET['jabatan']) && isset($_GET['agama']) && isset($_GET['status']) && isset($_GET['jml_anak'])) {
            $jabatan = $_GET['jabatan'];
            $agama = $_GET['agama'];
            $status = $_GET['status'];
            $jml_anak = $_GET['jml_anak'];

            // Tentukan gaji pokok
            switch ($jabatan) {
                case 'manager':
                    $gaji_pokok = 20000000;
                    break;
                case 'asisten':
                    $gaji_pokok = 15000000;
                    break;
                case 'kabag':
                    $gaji_pokok = 10000000;
                    break;
                case 'staff':
                    $gaji_pokok = 4000000;
                    break;
                default:
                    $gaji_pokok = 0;
                    break;
            }
            // Tentukan tunjangan jabatan
            $tunjangan_jabatan = 0.2 * $gaji_pokok;
            // Tentukan tunjangan keluarga
            if ($status == 'Menikah') {
                if ($jml_anak >= 3 && $jml_anak <= 5) {
                    $tunjangan_keluarga = 0.1 * $gaji_pokok;
                } elseif ($jml_anak >= 1 && $jml_anak <= 2) {
                    $tunjangan_keluarga = 0.05 * $gaji_pokok;
                } else {
                    $tunjangan_keluarga = 0;
                }
            } else {
                $tunjangan_keluarga = 0;
            }
            // Tentukan gaji kotor
            $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;
            // Tentukan zakat profesi
            $zakat_profesi = ($agama == 'islam' && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;
            // Tentukan take home pay
            $take_home_pay = $gaji_kotor - $zakat_profesi;
            // Tampilkan hasil perhitungan
            echo "Hasil Perhitungan Gaji Karyawan <br>";
            echo "Gaji Pokok : " . number_format($gaji_pokok) . "<br>";
            echo "Tunjangan Jabatan : " . number_format($tunjangan_jabatan) . "<br>";
            echo "Tunjangan Keluarga : " . number_format($tunjangan_keluarga) . "<br>";
            echo "Gaji Kotor : " . number_format($gaji_kotor) . "<br>";
            echo "Zakat Profesi : " . number_format($zakat_profesi) . "<br>";
            echo "Take Home Pay : " . number_format($take_home_pay) . "<br>";
        } else {
            echo "Silahkan lengkapi form di atas";
        }
        echo"</div>";
        ?>

</body>
</html>