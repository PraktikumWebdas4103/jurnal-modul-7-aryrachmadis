<?php
include "koneksi.php";
$sql = mysqli_query($con,"SELECT * FROM jurnal7");
?>
<form action="" method=POST>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
            <th>jenis kelamin</th>
            <th>program studi</th>
            <th>fakultas</th>
            <th>asal</th>
            <th>moto hidup</th>
            <th>action</th>
        </tr>
        <?php 
        if(mysqli_num_rows($sql)>0){ 
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["jeniskelamin"];?></td>
            <td><?php echo $data["programstudi"];?></td>
            <td><?php echo $data["fakultas"];?></td>
            <td><?php echo $data["asal"];?></td>
            <td><?php echo $data["motohidup"];?></td>
            <td><a href="delete.php">Delete</a></td>
            <td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>