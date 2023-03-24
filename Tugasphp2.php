<!DOCTYPE html>
<html>
<head>
    <title>Form Gaji Pegawai</title>
</head>
<body>
    <form action="proses_gaji.php" method="post">
        <label for="jabatan">Jabatan:</label>
        <select name="jabatan" id="jabatan">
            <option value="Manager">Manager</option>
            <option
            value="Asisten">Asisten</option>
        <option value="Kabag">Kabag</option>
        <option value="Staff">Staff</option>
    </select>
    <br>
    <label for="status">Status:</label>
    <input type="radio" name="status" id="menikah" value="Menikah">
    <label for="menikah">Menikah</label>
    <input type="radio" name="status" id="belum_menikah" value="Belum Menikah">
    <label for="belum_menikah">Belum Menikah</label>
    <br>
    <label for="jml_anak">Jumlah Anak:</label>
    <input type="number" name="jml_anak" id="jml_anak" min="0" max="5">
    <br>
    <input type="submit" value="Hitung Gaji">
</form>
<?php
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
$jml_anak = $_POST['jml_anak'];
$gaji_pokok = 0;
$tunjangan_jabatan = 0;
$tunjangan_keluarga = 0;
$gaji_kotor = 0;
$zakat_profesi = 0;
$take_home_pay = 0;

switch ($jabatan) {
    case "Manager":
        $gaji_pokok = 20000000;
        break;
    case "Asisten":
        $gaji_pokok = 15000000;
        break;
    case "Kabag":
        $gaji_pokok = 10000000;
        break;
    case "Staff":
        $gaji_pokok = 4000000;
        break;
    default:
        echo "Jabatan tidak valid.";
}

$tunjangan_jabatan = 0.2 * $gaji_pokok;

if ($status == "Menikah" && $jml_anak <= 2) {
    $tunjangan_keluarga = 0.05 * $gaji_pokok;
} elseif ($status == "Menikah" && $jml_anak >= 3 && $jml_anak <= 5) {
    $tunjangan_keluarga = 0.1 * $gaji_pokok;
} else {
    $tunjangan_keluarga = 0;
}

$gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

$zakat_profesi = ($gaji_kotor >= 6000000 && $agama == "Islam") ? 0.025 * $gaji_kotor : 0;

$take_home_pay = $gaji_kotor - $zakat_profesi;

echo "Rincian Gaji Pegawai:";
echo "<br>";
echo "Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.');
echo "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ',', '.');
echo "<br>";
echo "Tunjangan Keluarga: Rp. " . number_format($tunjangan_keluarga, 0, ',', '.');
echo "<br>";
echo "Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.');
echo "<br>";
echo "Zakat Profesi: Rp. " . number_format($zakat_profesi, 0, ',', '.');
echo "<br>";
echo "Take Home Pay: Rp. " . number_format($take_home_pay, 0, ',', '.');
?>

</body></html>
