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
