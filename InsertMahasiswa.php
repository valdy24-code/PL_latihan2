<h2>Input Mahasiswa</h2>
<?php
   include 'koneksi.php';
   $db = new database(); 
   $conn = $db->Connect();

if(isset($_POST['insert']))
   {
        $query = mysqli_query($conn, "insert into tbl_mahasiswa values(
            '".$_POST['npm']."',
            '".$_POST['nama']."'
            )");
            header('location:mahasiswa.php');
        }
?>

<form action="" method="POST">
    <input type="text" name="npm">
    <input type="text" name="nama">
    <input type="submit" name="insert" value="simpan">
</from>