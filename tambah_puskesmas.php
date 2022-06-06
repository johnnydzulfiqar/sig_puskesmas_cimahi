<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>
<?php include('header.php'); ?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Tambah Puskesmas</h1>
		<form action="" method="post" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" required="" class="form-control">
			</div>
			<div class="form-group mb-3">
				<label>Foto</label>
				<input type="file" name="image" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Lattitude</label>
				<input type="text" name="lat" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Longtitude</label>
				<input type="text" name="ing" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" name="des" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
		</form>

		<?php
		include('koneksi.php');

		if (isset($_POST['submit'])) {

			$nama = $_POST['nama'];
			$lat = $_POST['lat'];
			$ing = $_POST['ing'];
			$des = $_POST['des'];
			$image = $_FILES['image']['name'];
			$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
			$target = "img/" . basename($image);
			mysqli_query($db, $sql);

			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
				$msg = "Image uploaded successfully";
			} else {
				$msg = "Failed to upload image";
			}
			$datas = mysqli_query($db, "insert into lokasi (nama,lat,ing,des,image,image_text)values('$nama', '$lat', '$ing', '$des', '$image', '$iamge_text')") or die(mysqli_error($db));
			echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
		}
		?>
	</div>
	</div>
	</div>


</body>

</html>