<!DOCTYPE html>
<html>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="index.php?id=<?php echo base64_encode(1); ?>">Mahasiswa</a>
            <a href="index.php?id=<?php echo base64_encode(2); ?>">Dosen</a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $id_menu =base64_decode($_GET["id"]);
                if($id_menu==1)
                {
                    include('mahasiswa.php');
                }
                elseif($id_menu==2)
                {
                    include('Dosen.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>