<?php
    $m1 = ['NIM'=>'202040031','Nama'=>'Helfi','Nilai'=>90];
    $m2 = ['NIM'=>'202040032','Nama'=>'Kurnia','Nilai'=>80];
    $m3 = ['NIM'=>'202040033','Nama'=>'Tania','Nilai'=>70];
    $m4 = ['NIM'=>'202040034','Nama'=>'Bania','Nilai'=>60];
    $m5 = ['NIM'=>'202040035','Nama'=>'Cania','Nilai'=>50];
    $m6 = ['NIM'=>'202040036','Nama'=>'Denia','Nilai'=>40];
    $m7 = ['NIM'=>'202040037','Nama'=>'Sania','Nilai'=>30];
    $m8 = ['NIM'=>'202040038','Nama'=>'Mania','Nilai'=>20];
    $mahasiswa =[$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];

    $ar_judull  =['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];
?>

<table>
    <thead>
        <tr>
    <?php
        foreach($ar_judull as $judul){
            ?>
            <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
<tbody>
    <?php
        $no =1;
        foreach ($mahasiswa as $mhs){
            $ket =($mhs['Nilai']>= 60) ? 'lulul' : 'tidak lulus';
            // grade

            if($mhs['Nilai']>= 85 && $mhs['Nilai'] <= 100) $grade ='A';
            elseif ($mhs['Nilai']>= 75 && $mhs['Nilai'] <= 80) $grade ='B';
            elseif ($mhs['Nilai']>= 60 && $mhs['Nilai'] <= 74) $grade ='C';
            elseif ($mhs['Nilai']>= 0 && $mhs['Nilai'] <= 59) $grade ='D';
            else $grade = "";

            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['NIM'] ?></td>
                <td><?= $mhs ['Nama'] ?></td>
                <td><?= $mhs ['Nilai'] ?></td>
                <td><?= $ket?></td>
                <td><?= $grade?></td>
            </tr>
        <?php $no++; } ?>
</tbody>
</table>