<!DOCTYPE html>
<html>
<head>
	<title>Daftar Bidang 2D</title>
	<style>
		table {
            border-collapse: collapse;
            margin: auto;
            width: 60%;
        }

        thead {
            background-color: #008080;
            color: #fff;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Nama Bidang</th>
				<th>Luas</th>
				<th>Keliling</th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once './Lingkaran.php';
			require_once './Persegipanjang.php';
			require_once './Segitiga.php';

			$Lingkaran = new Lingkaran('10');
			$Persegipanjang = new Persegipanjang('10', '2');
			$Segitiga = new Segitiga('10', '5', '3');

			$data = [$Lingkaran, $Persegipanjang, $Segitiga];

			foreach ($data as $d) {
				echo '<tr>';
				echo '<td>' . $d->namaBidang() . '</td>';
				echo '<td>' . $d->luasBidang() . '</td>';
				echo '<td>' . $d->kelilingBidang() . '</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</body>
</html>
