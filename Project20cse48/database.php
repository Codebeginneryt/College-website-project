<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn){
	//echo "<h1><font color='white'>Success</font></h1>";
}
else{
	die("Error".mysqli_connect_error());
}

?>