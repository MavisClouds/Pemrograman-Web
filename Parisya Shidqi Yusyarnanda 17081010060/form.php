<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="gridwoi.css">
	<?php include 'connect.php';?>
	<title>forms</title>
</head>
<body>

	
<table border="5px">
	

	<?php  
	global $database;

	$no = $_GET['no'];
	$npm = $_GET['npm'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];

	$sql = "INSERT INTO infomhs (no, npm, nama, alamat)
	VALUES ('{$no}', '{$npm}', '{$nama}','{$alamat}')";

	if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}
	echo $nama;


	$sql = "SELECT * FROM infomhs";

	if ($result = mysqli_query( $koneksi, $sql )) {

		/* fetch associative array */
		while ($row = $result->fetch_assoc()) {

			$field1name = $row["no"];
			$field2name = $row["npm"];
			$field3name = $row["nama"];
			$field4name = $row["alamat"];

			echo '<tr> 
			<td>'.$field1name.'</td> 
			<td>'.$field2name.'</td> 
			<td>'.$field3name.'</td> 
			<td>'.$field4name.'</td> 
			</tr>';
		}

		$result->free();
	}

	?>

	</table>

	<form action="index.php">
		
		<button type="submit">back</button>

	</form>

</body>
</html>