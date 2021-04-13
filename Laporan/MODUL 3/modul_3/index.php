<?php
    include 'config.php';

$sql   = "SELECT * FROM pegawai INNER JOIN golongan ON pegawai.id_pegawai=golongan.id_pegawai";
$query = mysqli_query($koneksi, $sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEGAWAI</title>
</head>
<body>
    <a href="tambah.php">Tambah data</a>
    <table cellspacing="0" border="1">
      <tr>
        <th>Nama</th>
        <th>NIP</th>
        <th>Alamat</th>
        <th>Golongan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan</th>
        <th>Kelola</th>
      </tr>
      <?php
      while ($data = mysqli_fetch_array($query)) {
          ?>
          <tr>
                <td><?php echo $data['nama'] ?> </td>
                <td><?php echo $data['nip'] ?> </td>
                <td><?php echo $data['alamat'] ?> </td>
                <td><?php echo $data['golongan'] ?> </td>
                <td><?php echo $data['gaji_pokok'] ?> </td>
                <td><?php echo $data['tunjangan'] ?> </td>
                <td><a href="edit.php?id=<?= $data['id_pegawai'] ?>">Edit</a> </td>
                <td><a href="hapus.php?id=<?= $data['id_pegawai'] ?>">Hapus</a> </td>
            </tr>
        <?php   
      }
       
      ?>

    </table>
 </body>
 </html>   