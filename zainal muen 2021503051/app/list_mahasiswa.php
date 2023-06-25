<?php
require "../../config/config_global.php";
koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBAYARAN | SPP</title>
</head>
<body>
    <?php
    $query = $db->query("SELECT * FROM tbmahasiswa");
    ?>
    <table>
        <thead>
        <tr>
            <tr>NO</tr>
            <tr>IDMHS</tr>
            <tr>NAMAMHS</tr>
            <tr>ALAMATMHS</tr>
            <tr>FAKULTASMHS</tr>
            <tr>PRODIMHS</tr>
            <tr>Act</tr>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fetch_array()){
?>
                  <tr>
                    <td><?php echo $no++;?></td>
                       <td><?php echo $row['ID_MHS'];?></td>
                       <td><?php echo $row['NAMA_MHS'];?></td>
                       <td><?php echo $row['ALAMAT_MHS'];?></td>
                       <td><?php echo $row['PRODI_MHS'];?></td> 
                       <td>Edit | Hapus</td>    
                  </tr>
<?php
                }
                ?>

        </tbody>
    </table>
</body>
</html>