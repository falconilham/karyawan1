<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";
session_start();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nama = $_POST['nama'];
$divisi = $_POST['divisi'];
$tmpat_lahir = $_POST['tmpat_lahir'];
$id = $_POST['id'];

$sql = "UPDATE data SET nama='$nama', divisi='$divisi', tmpat_lahir='$tmpat_lahir' WHERE id='$id'";

$result = $conn->query($sql);
if ($result == true){	
		$myObj->pesan = 'berhasil monyet';

		$myJSON = json_encode($myObj);

		echo $myJSON;
	}
	else {
		echo "Edit Gagal, Silakan Back ke halaman sebelumnya".mysqli_error($conn);
	}


?>