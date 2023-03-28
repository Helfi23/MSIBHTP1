<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background-color: #f2f2f2;
    }

    th, td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .lulus {
        color: green;
        font-weight: bold;
    }

    .tidak-lulus {
        color: red;
        font-weight: bold;
    }
</style>

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
    // Hitung jumlah mahasiswa
    $jumlah_mahasiswa = count($mahasiswa);

    // Cari nilai tertinggi dan terendah
    $nilai_tertinggi = $mahasiswa[0]['Nilai'];
    $nilai_terendah = $mahasiswa[0]['Nilai'];

    foreach ($mahasiswa as $mhs) {
        if ($mhs['Nilai'] > $nilai_tertinggi) {
            $nilai_tertinggi = $mhs['Nilai'];
        }
        if ($mhs['Nilai'] < $nilai_terendah) {
            $nilai_terendah = $mhs['Nilai'];
        }
    }

    // Hitung rata-rata nilai
    $total_nilai = 0;
    foreach ($mahasiswa as $mhs) {
        $total_nilai += $mhs['Nilai'];
    }
    $rata_rata_nilai = $total_nilai / $jumlah_mahasiswa;
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

            //predikat
            switch ($grade) {
                case 'A':
                    $predikat = 'Sangat baik';
                    break;
                case 'B':
                    $predikat = 'Baik';
                    break;
                case 'C':
                    $predikat = 'Cukup';
                    break;
                case 'D':
                    $predikat = 'Kurang';
                    break;
                default:
                    $predikat = '';
                    break;
            }

            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['NIM'] ?></td>
                <td><?= $mhs ['Nama'] ?></td>
                <td><?= $mhs ['Nilai'] ?></td>
                <td><?= $ket?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
            </tr>
        <?php $no++; } ?>
</tbody>
<tfoot>
    <tr>
        <td colspan="3">Jumlah Mahasiswa</td>
        <td><?= $jumlah_mahasiswa ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Nilai Tertinggi</td>
        <td><?= $nilai_tertinggi ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Nilai Terendah</td>
        <td><?= $nilai_terendah ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Nilai Rata-Rata</td>
        <td><?= $rata_rata_nilai ?></td>
        <td colspan="3"></td>
    </tr>
</tfoot>
</table>