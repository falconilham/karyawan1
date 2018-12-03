<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id='$id'";
$result = $conn->query($sql);
if ($result == true){
		header('Location:../');
	}
	else {
		echo "gagal hapus, tanya yg buat".mysqli_error($conn);
	}


?>