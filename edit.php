<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM datamhs ORDER BY nim DESC ");
?>
<form action="" method="post">
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>nim</th>
            <th>aksi </th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>

            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>

        <?php $no++; } ?>
        <?php } ?>
    </table>
    <a href="form.php"> Tambah mahasiswa </a>
</form>
<form class="form-horizontal" role="search" method="post">
    <div class="col-md-8 col-xs-12">
        <input type="text" name="keyword" class="form-control" placeholder="Cari Akun Disini...">
    </div>
    <div class="col-md-4">
        <button class="btn btn-default" type="submit" name="submit-cari-akun">Cari Akun</button>
    </div>
</form>
<?php
if(isset($_POST['submit-cari-akun'])) {
    $nim1 =$_POST['keyword'];
  $query1 = mysqli_query($conn,"SELECT nim FROM datamhs where nim='$nim1'");
    while($data1 = mysqli_fetch_array($query1)){
 echo $data1["nim"];
    }
}
?>