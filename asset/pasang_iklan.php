<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "belajar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$barang = $_POST['barang'];
$harga = $_POST['harga'];
$kondisi = $_POST['kondisi'];
$deskripsi = $_POST['deskripsi'];


/*$lokasi_file    = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file      = $_FILES['fupload']['name'];
$size_file 		= $_FILES["fupload"]["size"];*/



//$lokasi_file    = $_FILES['foto_barang']['tmp_name'];
//$tipe_file      = $_FILES['foto_barang']['type'];
$nama_file      = $_FILES['foto_barang']['name'];
//$size_file 		= $_FILES["foto_barang"]["size"];

/*$acak           = rand(1,99);
$nama_file_unik = $acak.$nama_file; */

$ext1 = end (explode('.', $nama_file));
$nama_file      = date('Ymd');
$acak           = rand(0000,9999);
$nama_file_unik = "".$nama_file."".$acak.".".$ext1.""; 

  $vdir_upload = "../img/";
  $vfile_upload = $vdir_upload . $nama_file_unik;
//echo "$vfile_upload,$nama_file,$ext1"; exit();
  move_uploaded_file($_FILES["foto_barang"]["tmp_name"], $vfile_upload);

/*$foto_barang = $_FILES['foto_barang']['name'];
$tmp = $_FILES['foto_barang']['tmp_name'];
$fotobaru= date('dmYHis').$foto_barang;
$path = "../img/".$fotobaru;*/



//if(move_uploaded_file($tmp, $path))


$sql = "INSERT INTO transaksi(barang, nama, harga, kondisi, deskripsi, alamat, foto_barang)
values ('$barang', 'fiqsai', '$harga', '$kondisi', '$deskripsi', 'bekasi','$foto_barang')";

/*$sql = "INSERT INTO transaksi(barang, harga, kondisi, deskripsi, foto_barang)
values ('ok', '1', 'new', 'ahah', 'ok')";*/

$result = $conn->query($sql);
if ($result == true){
		header('Location:../index.php');
	}
	else {
		echo "Registrasi Gagal, Silakan Cek Kembali".mysqli_error($conn);
	}


?>