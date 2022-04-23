<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Edit</title>
</head>
<body>
	<div class="w-50 mx-auto mt-5">
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_016 WHERE id_016='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	 ?>

	 <h1>Form Edit</h1>
	 <?php 
	 while ($row = mysqli_fetch_array($hasil)) 
	{

	  ?>
	  <form method="post" action="update.php" class=" border p-3 mt-3">
	  	<input type="hidden" name="id_016" value="<?php echo $row ['id_016']?>">
	  	<label>Nama 016</label>
		<input type="text" name="nama_016" value="<?php echo $row ['nama_016'] ?>" class="form-control"> <br>
		<label>Email 016</label>
		<input type="text" name="email_016" value="<?php echo $row ['email_016'] ?>" class="form-control"> <br>
		<input type="submit" class="btn btn-succes value="Update">
	</form>
	<?php 
	}
	 ?>
	</div>
</body>
</html>