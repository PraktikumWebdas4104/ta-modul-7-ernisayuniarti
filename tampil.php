<?php 
	include "koneksi.php";
	$query= mysqli_query($koneksi, "SELECT * FROM datamhs ORDER BY DESC");
?>

<form action="#" method="POST">
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>nim</th>
			<th>aksi</th>
		</tr>

		<?php 
			if (mysqli_num_rows($query)>0) { ?>
				<?php 
					$no=1;
					while ($data =mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $data["nama"]?></td>
					<td><?php echo $data["nim"]?></td>

					<td>
						<a href="#">delete</a>
						<a href="edit.php">update</a>
					</td>
				</tr>

				<?php $no++; } ?>
			<?php } ?>
	</table>
	<a href="form.php">tambah datanya</a>
</form>