<h2>Delete Dosen</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();
   {
       $id_dosen = $_GET['id_dosen'];
       $query = mysqli_query($conn, "delete from tbl_dosen where id_dosen='$id_dosen'")or die(mysql_error());
           header('location:Dosen.php');
   }
?>