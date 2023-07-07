<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../assets/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $tanggallahir = $_POST["tanggallahir"];


    $sql = "INSERT INTO users (nama, alamat, jenis_kelamin, tanggal_lahir) VALUES ('$nama', '$alamat', '$jeniskelamin', '$tanggallahir')";

    if (mysqli_query($conn, $sql)) {
        echo '
        <script>
            alert("Data berhasil disimpan");
            window.location.href = "../";
        </script>';
    } else {
        $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo '
        <script>
            alert("' . $error_message . '");
            window.location.href = "../";
        </script>';
    }
    
}
