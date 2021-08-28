<h2>Daftar Mahasiswa</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();
   {
       $npm = $_GET['npm'];
       $query = mysqli_query($conn, "delete from tbl_mahasiswa where npm='$npm'")or die(mysql_error());
           header('location:mahasiswa.php');
   }
?>