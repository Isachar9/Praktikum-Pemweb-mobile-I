<?php
include 'config.php';

$id = (int) $_GET['id'];

if ($id) {
    $sql = "DELETE FROM golongan WHERE id_pegawai='{$id}'";
    $result = mysqli_query($koneksi, $sql);

    $sql = "DELETE FROM pegawai WHERE id_pegawai='{$id}'";
    $result = mysqli_query($koneksi, $sql);
}

header('Location: index.php');
exit;
?>