<h1>Dosen</h1>

<table border="1 px">
    <tr>
        <th> Id </th>
        <th> Nama </th>
        <th> Aksi </th>
    </tr>

<?php
    include 'koneksi.php';
    $db = new database(); 
    $conn = $db->Connect();

    $query = mysqli_query($conn, "select * from tbl_dosen");
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<th>"; echo $data['id_dosen']; echo "</th>";
        echo "<th>"; echo $data['nama_dosen']; echo "</th>";
        echo "<th>"; echo "<a href='Editdosen.php?id_dosen=$data[id_dosen]'>Ubah</a> | <a href='DeleteDosen.php?id_dosen=$data[id_dosen]'>Hapus</a>"; echo "</th>";
        echo "</tr>";
    }
 ?>

</table>
<br>
<input type='button' onclick=location.href='InsertDosen.php' value='Tambah Data' />