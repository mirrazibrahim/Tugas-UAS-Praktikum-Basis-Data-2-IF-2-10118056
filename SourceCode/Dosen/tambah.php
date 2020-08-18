<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen Teknik Informatika</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		<a class="navbar-brand" href="../index.php">UAS BASIS DATA 2</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="../mahasiswa/index.php">Mahasiswa</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Dosen</a>
					<li class="nav-item ">
						<a class="nav-link" href="../Matakuliah/index.php">Matakuliah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../Nilai/index.php">Nilai</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:20px">
 
	<h2>DATA DOSEN</h2>
	<br/>
	<a class="btn btn-info" href="index.php" role="button" >KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA DOSEN</h3>
	<form method="post" action="tambah_aksi.php">
	<table class="table table-striped table-hover table-sm table-bordered">
			<tbody>
			<tr>			
				<td>NIP</td>
				<td><input type="number" name="nip"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
            </tr>
                <td>Matakuliah</td>
                <td>
                    <select name="matakuliah">
					<option disabled selected> Pilih </option>;
                    <?php
                        include 'koneksi.php';
						$data = mysqli_query($koneksi,"select * from matakuliah");
						
                        while($d = mysqli_fetch_assoc($data)){
                    ?>
                            <option value="<?php echo $d['id_mk']; ?>"><?php echo$d['matakuliah'] ?></option>'';
                        <?php
                        }
                    ?>    
                    </select>
                </td>
			<tr>
				<td></td>
				<td><input class="btn btn-info" name='simpan'type="submit" value="SIMPAN"></td>
			</tr>		
			</tbody>
	</table>
	<?php
 if (isset($_POST['simpan'])) {
  echo "<br>Data yang dipilih:<br>";
  echo $_POST['matakuliah'];
 }
?>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	</form>
</body>
</html>