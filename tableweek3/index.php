<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container_12">
		
		<form action="form.php" method="get" >
		<h1>No</h1>
		<input type="Text"  name="no" class="container_12 grid_12"/> 
		<h1>NPM</h1>
		<input type="Text"  name="npm" class="container_12 grid_12"/> 
		<h1>Nama</h1>
		<input type="Text"  name="nama" class="container_12 grid_12"/> 
		<h1>Alamat</h1>
		<input type="Text"  name="alamat" class="container_12 grid_12"/> 

		<button type="submit">enter</button> 

	</form>
	</div>

	<?php 

	
	/*$sql = "INSERT INTO infomhs (no, npm, nama, alamat)
	VALUES ('3', '17081010031', $_SESSION['namas'][0],'jlkop4ikopang12iconsicon')";

	if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}*/

	?>

</body>
</html>