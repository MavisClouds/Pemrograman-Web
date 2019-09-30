<?php


$host="localhost";
$user="root";
$password="";
$database="tableweek3part2";

$koneksi=  mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

/*if($koneksi)
{
	echo "berhasil terhubung";
}
else
{
	echo "gagal tersambung";
}*/

?>