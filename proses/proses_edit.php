<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nama = $_POST['nama'];
$divisi = $_POST['divisi'];
$tmpat_lahir = $_POST['tmpat_lahir'];
$tnggal_lahir = $_POST['tnggal_lahir'];
$kelamin = $_POST['kelamin'];
$id = $_POST['id'];

$sql = "UPDATE data SET nama='$nama', divisi='$divisi', tmpat_lahir='$tmpat_lahir', tnggal_lahir='$tnggal_lahir', kelamin='$kelamin' WHERE id='$id'";


$result = $conn->query($sql);
if ($result == true){	
		header('Location:../');
	}
	else {
		echo "Edit Gagal, Silakan Back ke halaman sebelumnya".mysqli_error($conn);
	}


?>