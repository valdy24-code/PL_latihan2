<h1>Daftar Mahasiswa</h1>

<table border="1 px">
    <tr>
        <th> NPM </th>
        <th> Nama </th>
        <th> Aksi </th>
    </tr>

<?php
    include 'koneksi.php';
    $db = new database(); 
    $conn = $db->Connect();

    $query = mysqli_query($conn, "select * from tbl_mahasiswa");
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<th>"; echo $data['npm']; echo "</th>";
        echo "<th>"; echo $data['nama']; echo "</th>";
        echo "<th>"; echo "<a href='EditMahasiswa.php?npm=$data[npm]'>Ubah</a> | <a href='DeleteMahasiswa.php?npm=$data[npm]'>Hapus</a>"; echo "</th>";
        echo "</tr>";
    }
 ?>

</table>
<br>
<input type='button' onclick=location.href='InsertMahasiswa.php' value='Tambah Data' />

<!DOCTYPE html>
<html>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="index.php?id=<?php echo base64_encode(1); ?>">Mahasiswa</a>
            <a href="index.php?id=<?php echo base64_encode(2); ?>">Dosen</a>
            <a href="index.php?id=<?php echo base64_encode(3); ?>">Matakuliah</a>
            <a href="index.php?id=<?php echo base64_encode(4); ?>">Nilai</a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $npm =base64_decode($_GET["id"]);
                if($id==1)
                {
                    include('mahasiswa.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
