<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location : singup.png");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>
<body>
<h1>Hello <?php echo $_SESSION['username'] ?> How Are You</h1>
</body>
</html>