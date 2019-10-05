<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="gridwoi.css">
	<title></title>
</head>
<body>

	<form action="submitted.php" method="get" class="container_12">

		<h2>ID</h2>
		<input type="text" name="ids" class="container_12 grid_12">
		<br>

		<h2>Status</h2>
		<input type="text" name="status" class="container_12 grid_12">
		<br>

		<h2>Jenis Kelamin</h2>
		<input type="text" name="jk" class="container_12 grid_12">
		<br>

		<h2>alamat</h2>
		<input type="text" name="alamat" class="container_12 grid_12">
		<br>

		<h2>Tempat/Tanggal Lahir</h2>
		<input type="text" name="ttl" class="container_12 grid_12">
		<br>

		<h2>Pendidikan SD</h2>
		<input type="text" name="sd" class="container_12 grid_12">
		<br>

		<h2>Pendidikan SMP</h2>
		<input type="text" name="smp" class="container_12 grid_12">
		<br>

		<h2>Pendidikan SMA</h2>
		<input type="text" name="sma" class="container_12 grid_12">
		<br>
		<br>
		
		<select name="pilihan">
			<option>Choose one</option>
			<option value="inserts">Insert</option>
			<option value="updates">Update</option>
			<option value="deletes">Delete</option>
		</select>

		<button type="submit">submit</button>

	</form>

</body>
</html>