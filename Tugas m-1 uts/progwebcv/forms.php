<?php  
include 'connect.php';

$sqla = "SELECT * FROM datadirisd ORDER BY id DESC LIMIT 1";


if ($result = mysqli_query( $koneksi, $sqla )) {

	/* fetch associative array */
	//while ($row = $result->fetch_assoc()) {
		# code...
	if($row = $result->fetch_assoc())
	{

		$field1name = $row["jk"];
		$field2name = $row["alamat"];
		$field3name = $row["ttl"];
		$field4name = $row["sd"];
		$field5name = $row["smp"];
		$field6name = $row["sma"];

	}

		$result->free();
	//}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="gridwoi.css">
	<title>MavisTech</title>
</head>
<body>

	<div class="blurry"></div>
	<div>
		<button class="button button2">Parisya Shidqi Yusyarnanda</button>
	</div>
	<div class="bg-text" style="font-family: sans-serif;">
		<h1>Curiculum Vitae</h1>
		<h2>Hello I'am</h2>
	</div>


	<div class="grid_3">
		<div class="card">
			<img src="blur1.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>Status</b></h4>
				<?php echo "<p>"."Mahasiswa"."</p>";  ?>
			</div>
		</div>
	</div>
	<div class="grid_3">
		<div class="card">
			<img src="aurora.jpg" alt="Avatar" style="width:300px; height: 200px">
			<div class="container">
				<h4><b>Jenis Kelamin</b></h4>
				<?php echo "<p>".$field1name."</p>";  ?>
			</div>
		</div>
	</div>
	<div class="grid_3">
		<div class="card">
			<img src="clear2.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>Alamat</b></h4>
				<?php echo "<p>".$field2name."</p>";  ?>
			</div>
		</div>
	</div>
	<div class="grid_3">
		<div class="card">
			<img src="clear6.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>Tempat/Tgl Lahir</b></h4>
				<?php 

				echo "<p>".$field3name."</p>";

				?>
			</div>
		</div>
	</div>


	<div class="bg-text1" style="font-family: sans-serif;">
		<h1>Pendidikan</h1>
	</div>

	<div class="blurry1"></div>

	<div>
		<button class="button button1">2011</button>
		<button class="button button1">2014</button>
		<button class="button button1">2017</button>
	</div>

	<div class="grid_4">
		<div class="card" style="transform: translate(0%, 350px); margin-right: 90px; margin-bottom: 50px">
			<img src="clear4.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>2011</b></h4>
				<?php echo "<p>".$field4name."</p>";  ?>
			</div>
		</div>
	</div>

	<div class="grid_4">
		<div class="card" style="transform: translate(0%, 350px); margin-right: 90px; margin-bottom: 50px">
			<img src="clear4.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>2014</b></h4>
				<?php 
					echo "<p>".$field5name."</p>";
				 ?>
			</div>
		</div>
	</div>

	<div class="grid_4">
		<div class="card" style="transform: translate(0%, 350px); margin-right: 90px; margin-bottom: 50px">
			<img src="clear4.jpg" alt="Avatar" style="width:300px;height: 200px">
			<div class="container">
				<h4><b>2017</b></h4>
				<?php echo "<p>".$field6name."<p>";
				

				?>
			</div>
		</div>
	</div>

</body>
</html>