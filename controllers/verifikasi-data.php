<?php
include_once 'koneksi.php';

    $id=$_GET['id'];
    $status_ajuan = 2;
    $query = "UPDATE daftar SET status_ajuan = '$status_ajuan' WHERE id_daftar = '$id'";
    $result = $koneksi->query($query);
        if ($result) {
            return header('Location: ../pages/hasil.php');
        }
    $koneksi->close();
?>