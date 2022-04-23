<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
</head>
<body>
	<div class="container" align="center">
		<?php 
		include "koneksi.php";

		$id = $_GET['id'];

        $sql = "DELETE FROM tbl_016 WHERE id_016 = '$id'";
        $hasil = mysqli_query($koneksi, $sql);
         if (!$hasil){ ?>
         	<h2>Delete tidak berhasil</h2>
        <?php }
        else { ?>
        	<h2 class = "mt-3"> Delete berhasil<br></h2>
        	<a href = 'data.php' button type='button' class="btn btn-dark mt-3"> Show data</a>
            <?php }
         
		 ?>
	</div>

</body>
</html>