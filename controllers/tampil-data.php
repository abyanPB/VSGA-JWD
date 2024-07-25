<?php
include_once 'koneksi.php';

function getHasilPengumuman() {
    global $koneksi;
    $query = "SELECT * FROM daftar";
    $result = $koneksi->query($query);
    return $result;
}

?>