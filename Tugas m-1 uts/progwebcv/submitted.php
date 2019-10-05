
<!DOCTYPE html>
<html>
<head>

	<?php include 'connect.php';?>
	<title></title>
</head>
<body>


	<?php  

	global $database;


	$sql="SELECT * FROM datadirisd";

	if ($result=mysqli_query($koneksi,$sql))
	{
  // Return the number of rows in result set
		$rowcount=mysqli_num_rows($result);
		printf("Result set has %d rows.\n",$rowcount);
  // Free result set
		mysqli_free_result($result);
	}

	$id = $rowcount;
	$ids = $_GET['ids'];
	$jk = $_GET['jk'];
	$alamat = $_GET['alamat'];
	$ttl = $_GET['ttl'];
	$sd = $_GET['sd'];
	$smp = $_GET['smp'];
	$sma = $_GET['sma'];
	$pilihan = $_GET['pilihan'];
	echo $ids;

	if ($pilihan == "inserts")
	{
		$sqli = "INSERT INTO datadirisd (id, jk, alamat, ttl, sd, smp, sma)
		VALUES ('{$id}','{$jk}', '{$alamat}', '{$ttl}','{$sd}','{$smp}','{$sma}')";

		if (mysqli_query($koneksi, $sqli)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sqli . "<br>" . mysqli_error($koneksi);
		}
	}
	elseif ($pilihan == "updates") {

		$sqli = "UPDATE datadirisd SET id = '$id', jk = '$jk', alamat = '$alamat',ttl = '$ttl',sd = '$sd',smp = '$smp',sma = '$sma' WHERE id = $id";

		if (mysqli_query($koneksi, $sqli)) {
			echo "New record Updated successfully";
		} else {
			echo "Error: " . $sqli . "<br>" . mysqli_error($koneksi);
		}
			# code...
	}
	elseif ($pilihan == "deletes")
	{

		$sqli = "DELETE FROM datadirisd WHERE id = $ids ";

		if (mysqli_query($koneksi, $sqli)) {
			echo "New record Deleted successfully";
		} else {
			echo "Error: " . $sqli . "<br>" . mysqli_error($koneksi);
		}

	}

	


	echo "<table border='3px';>";


	$sqla = "SELECT * FROM datadirisd";

	if ($result = mysqli_query( $koneksi, $sqla )) {


		/* fetch associative array */
		while ($row = $result->fetch_assoc()) {
		# code...
			$field0name = $row["id"];
			$field1name = $row["jk"];
			$field2name = $row["alamat"];
			$field3name = $row["ttl"];
			$field4name = $row["sd"];
			$field5name = $row["smp"];
			$field6name = $row["sma"];

			echo "<tr>";
			echo '<td>'.$field0name.'</td>';
			echo '<td>'.$field1name.'</td>';
			echo '<td>'.$field2name.'</td>';
			echo '<td>'.$field3name.'</td>';
			echo '<td>'.$field4name.'</td>';
			echo '<td>'.$field5name.'</td>';
			echo '<td>'.$field6name.'</td>';
			echo "</tr>";



		}

		$result->free();
	}

	echo "</table>";

	?>

	<form action="forms.php">
		<button type="submit">Submitted</button>
	</form>
	<table border="3px"></table>
	

</body>
</html>