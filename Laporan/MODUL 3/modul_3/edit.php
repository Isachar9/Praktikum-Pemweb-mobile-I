<?php
include 'config.php';

$id = (int) $_GET['id'];
$sql = "SELECT * FROM pegawai INNER JOIN golongan ON pegawai.id_pegawai=golongan.id_pegawai WHERE pegawai.id_pegawai='$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>">
<br>
    <label for="nip">NIP</label>
    <input type="text" name="nip" value="<?= $data['nip'] ?>">
<br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="<?= $data['alamat'] ?>">
<br>
    <label for="golongan">Golongan</label>
    <input type="text" name="golongan" value="<?= $data['golongan'] ?>">
<br>
    <label for="gaji_pokok">Gaji Pokok</label>
    <input type="text" name="gaji_pokok" value="<?= $data['gaji_pokok'] ?>">
<br>
    <label for="tunjangan">Tunjangan</label>
    <input type="text" name="tunjangan" value="<?= $data['tunjangan'] ?>">
<br>

<input type="submit" value="Simpan">

</form>


<?php
if ($_POST) {
    $sql = "UPDATE pegawai SET nama='{$_POST['nama']}}',
                               nip='{$_POST['nip']}',
                               alamat='{$_POST['alamat']}'
                              WHERE id_pegawai= '{$_POST['id']}'";
            
    $result = mysqli_query($koneksi, $sql);

    $sql = "UPDATE golongan SET golongan='{$_POST['golongan']}',
                                gaji_pokok='{$_POST['gaji_pokok']}',
                                tunjangan='{$_POST['tunjangan']}' WHERE id_pegawai='{$_POST['id']}'";

    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "Data berhasil diubah";
        header('Location: index.php');
    } else {
    
    }
}

?>