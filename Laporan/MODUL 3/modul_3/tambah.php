<form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama">
<br>
    <label for="nip">NIP</label>
    <input type="text" name="nip">
<br>
    <label for="golongan">Golongan</label>
    <input type="text" name="golongan">
<br>
    <label for="gaji_pokok">Gaji Pokok</label>
    <input type="text" name="gaji_pokok">
<br>
    <label for="tunjangan">Tunjangan</label>
    <input type="text" name="tunjangan">
<br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat">
<br>

<input type="submit" value="Simpan">

</form>

<?php
include 'config.php';
if ($_POST) {
    $sql = "INSERT INTO pegawai (nama, nip, alamat) VALUES ('{$_POST['nama']}', 
    '{$_POST['nip']}', '{$_POST['alamat']}')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT max(id_pegawai) AS last_id FROM pegawai LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($query);
    $last_id = $data['last_id'];

    $sql = "INSERT INTO golongan (id_pegawai, golongan, gaji_pokok, tunjangan) VALUES ('$last_id', '{$_POST['golongan']}'
           , '{$_POST['gaji_pokok']}', '{$_POST['tunjangan']}')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "Data berhasil disimpan";
        header('Location: index.php');
    } else {
        echo "Data gagal disimpan ".mysqli_error();
    }
}
?>