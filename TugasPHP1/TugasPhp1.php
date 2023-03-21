<!DOCTYPE html>
<html>
<head>
	<title>Hitung Luas dan Keliling Jajar Genjang</title>
	<link rel="stylesheet" href="./stylephp.css">
</head>
<body>
	<h1>Hitung Luas dan Keliling Jajar Genjang</h1>
	<form method="post" action="">
		<label for="alas">Alas:</label>
		<input type="number" id="alas" name="alas" required>
		<label for="tinggi">Tinggi:</label>
		<input type="number" id="tinggi" name="tinggi" required>
		<label for="sisi">Sisi:</label>
		<input type="number" id="sisi" name="sisi" required>
		<button type="submit" name="hitung">Hitung</button>
	</form>
	<?php
    echo"<div class='result'>";
    if(isset($_POST['hitung'])){
		$alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		$sisi = $_POST['sisi'];
		
		$luas = $alas * $tinggi;
		$keliling = 2 * ($alas + $sisi);
		
		echo "<h3>Hasil Perhitungan:</h3>";
		echo "Luas Jajar Genjang: " . $luas . "<br>";
		echo "Keliling Jajar Genjang: " . $keliling;
	}
    echo"</div>";
	?>
</body>
</html>
