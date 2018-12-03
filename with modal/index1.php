<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>

		<title>Data Karyawan</title>
		<style>
			#tambah {
				margin-right: 40%;
				margin-left:  40%;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2 class="text-center">Data Karyawan
			<p>List data Karyawan PT.bebas</p>
			</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Divisi</th>
							<th>Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
					<?php 
	                $servername = "localhost";
	                $username = "root";
	                $password = "";
	                $dbname = "karyawan";
	                $conn = new mysqli($servername, $username, $password, $dbname);

	                $sql = "SELECT * from data";
	                $result = mysqli_query($conn, $sql);

	                     while($row = $result->fetch_assoc()) {
	                ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['divisi']; ?></td>
							<td><?php echo $row['kelamin']; ?></td>
							<td><?php echo $row['tmpat_lahir']; ?></td>
							<td><?php echo $row['tnggal_lahir']; ?></td>
							<td><a href="proses/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" role="button">Hapus</a>
							<td><a href="edit_karyawan.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" role="button">Edit</a>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				<a href="tambah.php" id="tambah" class="btn btn-success center-block">Tambah Karyawan</a>
		</div>
	</body>
</html>
