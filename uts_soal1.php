<!DOCTYPE html>
<html>
<head>
	<title>UTS Soal Nomer 1</title>
</head>
<body>
	<form method="POST" name="" action="">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tr align="center">
				<td><h2><b>Masukan Data</b></h2></td>
			</tr>
			<tr>
				<td>
					<table width="500" border="0" cellpadding="0" cellspacing="10" align="center">
						<tr>
							<td>Nama Wilayah :</td>
							<td>:</td>
							<td>
								<select name="wilayah">
									<option value="" disabled selected>Silakan Pilih Wilayah</option>
									<option value="Dki Jakarta">DKI Jakarta</option>
									<option value="Jawa Barat">Jawa Barat</option>
									<option value="Banten">Banten</option>
									<option value="Jawa Tengah">Jawa Tengah</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Jumlah Positif</td>
							<td>:</td>
							<td><input type="text" name="positif" size="40"  ></td>
						</tr>
						<tr>
							<td>Jumlah Dirawat</td>
							<td>:</td>
							<td><input type="text" name="dirawat" size="40" ></td>
						</tr>
						<tr>
							<td>Jumlah Sembuh</td>
							<td>:</td>
							<td><input type="text" name="sembuh" size="40" ></td>
						</tr>
						<tr>
							<td>Jumlah Meninggal</td>
							<td>:</td>
							<td><input type="text" name="meninggal" size="40" ></td>
						</tr>
						<tr>
							<td>Nama Operator</td>
							<td>:</td>
							<td><input type="text" name="operator" size="40" ></td>
						</tr>
						<tr>
							<td>NIM Mahasiswa</td>
							<td>:</td>
							<td><input type="text" name="nim" size="40" ></td>
						</tr>
						<tr>
							<td colspan="4" align="center">
								<input type="submit" name="submit" value="Simpan">
							</td>
						</tr>
					</table>	
				</td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<center>
		<?php
		$wilayah = $_POST['wilayah'];
		$positif = $_POST['positif'];
		$dirawat = $_POST['dirawat'];
		$sembuh = $_POST['sembuh'];
		$meninggal = $_POST['meninggal'];
		$operator = $_POST['operator'];
		$nim = $_POST['nim'];

		echo "Data Pemantaun Covid19 Wilayah ". $_POST['wilayah'];
		echo "<br>";
		date_default_timezone_set('Asia/Jakarta');
		echo "Per-". date("d F Y h:i:s");
		echo "<br>";
		echo $_POST['operator']. " / " . $_POST['nim'];
		echo "<br>";
		?>

		<table border="1px">
			<thead>
				<td>Positif</td>
				<td>Dirawat</td>
				<td>Sembuh</td>
				<td>Meninggal</td>
			</thead>
			<tr>
				<td><?php echo $_POST['positif']; ?></td>
				<td><?php echo $_POST['dirawat']; ?></td>
				<td><?php echo $_POST['sembuh']; ?></td>
				<td><?php echo $_POST['meninggal']; ?></td>
			</tr>
		</table>
		<?php


		$wilayah = $_POST['wilayah'];
		$positif = $_POST['positif'];
		$dirawat = $_POST['dirawat'];
		$sembuh = $_POST['sembuh'];
		$meninggal = $_POST['meninggal'];
		$operator = $_POST['operator'];
		$nim = $_POST['nim'];


		$data = "\n 
		Data Pasien Covid19
		Wilayah : $wilayah
		Jumlah Positif : $positif
		Jumlah Dirawat : $dirawat
		Jumlah Sembuh : $sembuh
		Jumlah Meninggal : $meninggal
		Nama Operator : $operator
		NIM : $nim";


		$fh = fopen("Data Pasien.txt", "a");
		fwrite($fh, $data);


		fclose($fh);

		print "Data Telah Tersimpan.";

		?>
	</center>
</body>
</html>

