<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

$connect = mysqli_connect($host, $user, $pass, $db);

//Check Connection
if (mysqli_connect_errno()) 
{
	echo "Database connection failed : ".mysqli_connect_error();
}

?>