
<!DOCTYPE html>
<html>
<head>
	<?php include 'connect.php';?>
	<title></title>
</head>
<body>

	<?php  

	session_start();


	if (isset($_SESSION['iteration']))
	{
		$_SESSION['iteration'] = $_SESSION['iteration'] + 1;
		$_SESSION['namas'][$_SESSION['iteration']] = $_GET['nama'];
	}
	else
	{
		$_SESSION['iteration'] = 0; 
		$_SESSION['namas'][$_SESSION['iteration']] = $_GET['nama'];
	}

	if (!isset($_SESSION['namas']))
	{
		$_SESSION['namas'] = array(); 
	}
	

	
	
	echo $_SESSION['iteration'];

	echo "<table border=3px>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>City</th>";
	echo "</tr>";
	

	for ($i=0; $i <= count($_SESSION['namas']) - 1; $i++) { 
		echo "<tr>";
		echo '<td>'.$_SESSION['namas'][$i].'</td>';
		echo "</tr>";
	}
	
	echo "</table>";
	echo "<br>submitted";

	
	?>
	<form action="form.php">
		<button type="submit">back</button>
	</form>
	


</body>
</html>
