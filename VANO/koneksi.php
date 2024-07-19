<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "crud";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (isset($POST['simpan'])) {
    $idPasien = $POST['idPasien'];
    $nmPasien = $POST['nmPasien'];
    $jk = $POST['jk'];
    $alamat = $POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien, '$nmPasien' '$jk', '$alamat')");
    
    header('location:pasien.php'); 
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_GET['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien = '$idPasien',nmPasien='$nmPasien',jk='$jk',alamat='$alamat'");
    header("location:pasien.php");
    exit;
}

if (isset($_GET['idDokter'])) {
        $idDokter = $_GET['idDokter'];
        $koneksi->query("DELETE FROM dokter where idDokter = '$idDokter'");
        header("location:dokter.php");
}