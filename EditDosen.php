<h2>Edit Dosen</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();
   $id_dosen = $_GET['id_dosen'];

    $query = mysqli_query($conn, "select * from tbl_dosen where id_dosen='$id_dosen'") or die(mysqli_erro());
    while($data = mysqli_fetch_array($query)){

   if(isset($_POST['update']))
   {
       $nama_dosen = $_POST['nama_dosen'];
       $query = mysqli_query($conn, "update tbl_dosen set id_dosen='$id_dosen', nama_dosen='$nama_dosen' where id_dosen='$id_dosen'");
           header('location:dosen.php');
   }
 
}?>

<form action="" method="POST">
    <input type="text" name="nama_dosen">
    <input type="submit" name="update" value="simpan">
</from>
