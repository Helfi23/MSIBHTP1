<?php
echo "Hello Worf";

//variable

$namasiswa = "Helfi";
$umur = 22;
$beratbadan = 10;
$pekerjaan = "mahasiswa";
echo '</hr>';

echo 'Nama Siswa    :'.$namasiswa;
echo '<br> Umur Siswa   :'.$umur;
echo '<br> Berat Badan  :'.$beratbadan;
echo '<br> Pekerjaan    :'.$pekerjaan;

?>

<!-- pemanggilan menggunakan document HTML -->
<hr>
Nama siswa : <?= $namasiswa?>
<br>Umur    :<?= $umur?>
<br>Berat Badan : <?= $beratbadan?>
<br> Pekerjaan  : <?= $pekerjaan?>
