<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from data where id = '$id'";
$result = mysqli_query($conn, $sql);
while($row = $result->fetch_assoc()) {      


?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<style>
		.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		}
		.card-default {
			max-width: 500px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card card-default">
				<div class="card-header">
				<h3 class="text-center">Form Edit Karyawan</h3>
				</div>
					<div class="card-body">
					<form action="proses/proses_edit.php" method="post">

						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" required/>
						</div>

						<div class="form-group">
							<label>Divisi</label>
							<p>
							<select class="custom-select custom-select mb-3" name="divisi" required/>
							  <option selected="selected" disabled="true" >Pilih Divisi Anda</option>
							  <option value="Keuangan">Keuangan</option>
							  <option value="Marketing">Marketing</option>
							  <option value="IT">IT</option>
							 </select>
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" name="tmpat_lahir" value="<?php echo $row['tmpat_lahir']; ?>" required/>
						</div>
						
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tnggal_lahir" value="<?php echo $row['tnggal_lahir']; ?>" required/>
						</div>
						
						<label class="form-group">
							<label>Jenis Kelamin </label>
							<p>
							<select class="custom-select custom-select mb-3" name="kelamin" required>
							  <option selected="selected" disabled="true" >Pilih Gender anda</option>
							  <option value="Pria">Pria</option>
							  <option value="Wanita">Wanita</option>
							</select>
						</label>
						
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
					</div>
				</label>
		
</html>
<?php } ?>