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
$sql = "UPDATE data SET nama='$nama', divisi='$divisi'  WHERE nama='$nama'";
$result = $conn->query($sql);
if ($result == true){
		$myObj->pesan = 'berhasio monyet'

		$myJSON = json_encode($myObj);

		echo $myJSON;
	}
	else {
		echo "Edit Gagal, Silakan Back ke halaman sebelumnya".mysqli_error($conn);
	}


?>