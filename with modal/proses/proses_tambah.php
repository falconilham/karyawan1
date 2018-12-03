<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$nama = $_POST['nama'];
$divisi = $_POST['divisi'];
$tmpat_lahir = $_POST['tmpat_lahir'];
$tnggal_lahir = $_POST['tnggal_lahir'];
$kelamin = $_POST['kelamin'];


$sql = "INSERT INTO data(nama, divisi, tmpat_lahir, tnggal_lahir, kelamin) VALUES ('$nama', '$divisi', '$tmpat_lahir', '$tnggal_lahir', '$kelamin')";


$result = mysqli_query($conn, $sql);

if ($result == true){
		header('Location:../');
	}
	else {
		echo "Penambahan karyawan Gagal, Silakan Cek Kembali".mysqli_error($conn);
	}
?>