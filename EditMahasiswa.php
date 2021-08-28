<h2>Edit Mahasiswa</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();
   $npm = $_GET['npm'];

    $query = mysqli_query($conn, "select * from tbl_mahasiswa where npm='$npm'") or die(mysqli_erro());
    while($data = mysqli_fetch_array($query)){

   if(isset($_POST['update']))
   {
       $nama = $_POST['nama'];
       $query = mysqli_query($conn, "update tbl_mahasiswa set npm='$npm', nama='$nama' where npm='$npm'");
           header('location:mahasiswa.php');
   }
 
}?>

<form action="" method="POST">
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="update" value="Simpan">
<input type='button' onclick=location.href='mahasiswa.php' value='Batal' />
</form>

