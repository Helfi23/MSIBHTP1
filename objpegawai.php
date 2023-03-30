<?php 
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Helfi Apriliyandi Firdaos','Manager','Islam','Belum Menikah');
$pegawai2 = new Pegawai('01112','Kevin Araji','Asisten Manager','Kristen','Menikah');
$pegawai3 = new Pegawai('01113','Salman Alhidamkara','Kepala Bagian','Hinddu','Belum Menikah');
$pegawai4 = new Pegawai('01114','Muhammad Fajar Nugraha','Staf','Budha','Menikah');
$pegawai5 = new Pegawai('01115','Roihan Kusuma Wardana','Staf','Islam','Belum Menikah');


$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>