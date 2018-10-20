<form action="#" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="lakilaki">Laki-Laki<br/>
				<input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br/>
			</td>
		</tr>
		<tr>
			<td>PROGRAM STUDI</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="mi">MI</option>
				<option value="mp">MP</option>
				<option value="siskom">Sistem Komputer</option>
				<option value="ilkom">Ilmu Komunikasi</option>
			</select></td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit">FIT</option>
				<option value="fte">FTE</option>
				<option value="fkb">FKB</option>
				<option value="fif">FIF</option>
			</select></td>
		</tr>
		<tr>
			<td>ASAL</td>
			<td>:</td>
			<td><textarea name="asal"></textarea></td>
		</tr>
		<tr>
			<td>MOTO HIDUP</td>
			<td>:</td>
			<td><textarea name="motohidup"></textarea></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Registrasi"></td>
		</tr>
	</table>
</form>

<?php 
	if(isset($_POST['submit'])){
		include "koneksi.php";
		if ($koneksi) {     
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$jeniskelamin=$_POST['jeniskelamin'];
			$prodi=$_POST['prodi'];
			$fakultas=$_POST['fakultas'];
			$asal=$_POST['asal'];
			$motohidup=$_POST['motohidup'];
			$query = mysqli_query($koneksi, "SELECT * FROM datamhs WHERE nim='$nim'");
			$row = mysqli_fetch_array($query);
			$cari = strpos($nim, is_numeric($nim));
			$sql=$koneksi->query("INSERT INTO `datamhs`(`nama`,`nim`,`jeniskelamin`,`prodi`,`fakultas`,`asal`, `motohidup`) 
								VALUES('$nama','$nim','$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')");
			echo "Data berhasil dimasukkan."."<br>"."Klik <a href='tampil.php'>disini</a> untuk menampilkan";
		}
	}
 ?>