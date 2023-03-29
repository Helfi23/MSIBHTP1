<style>
    fieldset{
        width: 50%;
        margin-left: 25%;

    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background-color: #f2f2f2;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<?php
$ar_prodi = ["Si"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];
$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];


?>


<fieldset >
    <legend style="text-align:center;">Form Registrasi Masukan Nilai Mahasiswa dan Keahilan </legend>
<table>
    <thead>
        <tr>
            <th colspan="2" style="text-align:center ;">Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Perempuan" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($ar_prodi as $v => $prodi){
                            ?>
                            <option value="<?= $prodi ?>"><?= $prodi ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>
                        
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" >
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="2" style="text-align:center;">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
            

</fieldset>
<?php 

function hitungSkor($skills)
{
    global $ar_skill;
    $skor = 0;
    foreach ($skills as $skill) {
        $skor += $ar_skill[$skill];
    }
    return $skor;
}

function predikatskill($skor)
{
    if ($skor >=100 && $skor <= 150) {
        return "Sangat Baik";
    } elseif ($skor >=60 && $skor <=99) {
        return "Baik";
    } elseif($skor >= 40 && $skor <=59){
        return "Cukup";
    } elseif($skor >=0 && $skor <=39){
        return "Kurang";
    }
     else {
        return "Tidak Memadai";
    }
}

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $skor = hitungSkor($skill);
    $predikat = predikatskill($skor);
    $email = $_POST['email'];
    
}


?>
<br><br><br>
<fieldset>
    <legend style="text-align: center;">Hasil Dari Input</legend>
<table>
    <thead>
        <tr>
            <td>NIM </td>
            <td>: <?= $nim ?></td>
        </tr>
        <tr>
            <td>Nama  </td>
            <td>: <?= $nama ?></td>
            </tr>
        <tr>
            <td>Jenis Kelamin  </td>
            <td>: <?= $jk ?></td>
        </tr>
        <tr>
            <td>Program Studi  </td>
            <td>:<?= $prodi ?></td>
        </tr>
        <tr>
            <td>Skill </td>
            <td>: <?php
            if(empty($skill)){
                 echo 'Tidak Ada Skill';
            }else{
                foreach($skill as $s){ 
                echo $s;
            if(next($skill)){
                echo ', ';
                    }
                }
            }?></td>
        </tr>
        <tr>
            <td>Nilai </td>
            <td>:  <?= $skor ?></td>
        </tr>
        <tr>
            <td>Predikat </td>
            <td>: <?= $predikat ?></td>
        </tr>
        <tr>
            <td>Email </td>
            <td>: <?= $email ?></td>
        </tr>
        </tr>
    </thead>
</table>
</fieldset>