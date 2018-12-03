<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>

		<title>Data Karyawan</title>
	</head>
	<body>
		<div class="container">
			<h2>Data Karyawan</h2>
			<p>List data Karyawan PT.bebas</p>
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

							<!-- Button to Open the Modal -->
					<button type="button" class="btn btn-primary edit-modal" data-toggle="modal" data-target="#myModal"
						data-namaKaryawan="<?= $row['nama'] ?>"
						data-kelaminKaryawan="<?php echo $row['kelamin'] ?>"
						data-divisiKaryawan="<?= $row['divisi'] ?>"
						data-tempatLahir="<?= $row['tmpat_lahir'] ?>"
						data-id="<?= $row['id'] ?>"
						>
					  Edit
					</button>

					
						
						</tr>
					<?php } ?>
					</tbody>
				</table>
				<a href="tambah.php" class="btn btn-success center-block">Tambah Karyawan</a>
		</div>
		<!-- The Modal -->
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Edit Data Karyawan</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		         <form action="/action_page.php">
				  <div class="form-group">
				    <label for="nama">Nama :</label>
				    <input type="text" class="form-control" id="modal-name" name="name" value="<?php echo $row['nama']; ?>">
				  </div>
				  <input type="text" id="modal-id" value="<?php echo $row['id']; ?>" style="display: none">

				  <select id="modal-divisi" name="divisi" class="custom-select-sm">
				    <option value="IT">IT</option>
				    <option value="Keuangan">Keuangan</option>
				    <option value="Marketing">Marketing</option>
				  </select>

				  <div class="form-group">
				    <label for="tmpat_lahir">Tempat Lahir:</label>
				    <input type="text" class="form-control" id="modal-tmpatlahir" name="tmpat_lahir" value="<?php echo $row['tmpat_lahir']; ?>">
				  </div>

				  <button id="modal-submit" type="button" class="btn btn-primary">Submit</button>
				</form> 
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>
		<script src="asset/js/main.js" type="text/javascript"> </script>
	</body>
</html>
