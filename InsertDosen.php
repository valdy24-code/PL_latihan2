<h2>Input Dosen</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();

if(isset($_POST['insertDosen']))
   {
        $query = mysqli_query($conn, "insert into tbl_dosen values(
            '".$_POST['id_dosen']."',
            '".$_POST['nama_dosen']."'
            )");
            header('location:Dosen.php');
        }
?>

<form action="" method="POST">
    <br>Id Dosen</br>
    <input type="text" name="id_dosen">
    <br>Id Dosen</br>
    <input type="text" name="nama_dosen">
    <input type="submit" name="insertDosen" value="simpan">
</form>