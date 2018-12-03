<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
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
				<div class="card-heading">
					<h3 class="text-center">Form Penambahan Karyawan</h3>
				</div>
					
					<div class="card-body">
					<form action="proses/proses_tambah.php" method="post">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" required/>
						</div>
						
						<div class="form-group">
							<label for="sel1">Divisi</label>
								<select class="form-control" name="divisi">
								  <option selected="selected" disabled="true">Pilih Divisi Anda</option>
								  <option value="Keuangan">Keuangan</option>
								  <option value="Marketing">Marketing</option>
								  <option value="IT">IT</option>
								</select>
							 <br>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" name="tmpat_lahir" required/>
						</div>
						
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tnggal_lahir" required/>
						</div>
						
						<label class="form-group">
							<label for="sel1">Jenis Kelamin</label>
								<br>
									<select class="form-control" name="kelamin">
							 			<option selected="selected" disabled="true" >Pilih Gender anda</option>
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
						</label>



						<div class="text-center">	
							<button type="submit" class="btn btn-primary" id="tombolok">Tambah</button>
						</div>
					</form>