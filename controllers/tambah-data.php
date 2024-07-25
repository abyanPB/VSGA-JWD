<?php
include_once 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $beasiswa = $_POST['beasiswa'];
    $berkas = $_FILES['berkas']['name'];
    $status_ajuan = 1;
    $ekstensi_diperbolehkan = array('pdf','jpg','jpeg','png','zip');
    $ekstensi_berkas = pathinfo($berkas, PATHINFO_EXTENSION);
    $lokasi_berkas = '../images/berkas/'. $berkas;

    if (in_array($ekstensi_berkas, $ekstensi_diperbolehkan) === true) {
        if (move_uploaded_file($_FILES['berkas']['tmp_name'], $lokasi_berkas)) {
            $query = "INSERT INTO daftar (nama, email, no_hp, semester, ipk, beasiswa, berkas, status_ajuan) VALUES ('$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$berkas', '$status_ajuan')";
            $result = $koneksi->query($query);
            if ($result) {
                return header('Location: ../pages/hasil.php');
            } else {
                return header('Location: ../pages/daftar.php');
            }
            $koneksi->close();
        }
    }
}
?>