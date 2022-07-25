<?php
   $showAlert = false;
   $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   include 'C:\xampp\htdocs\Project20cse48/database.php';
   $username = $_POST["username"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $exists=false;
   if(($password == $cpassword) && $exists==false){
   	$sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
   	$result = mysqli_query($conn, $sql);
   	if($result){
   	   $showAlert = true;
         header("location: index.php");
   	}
   }
   else{
      $showError = "Passwords do not match";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="singupstyle.css">
	<title>SingUp BSAITM</title>
</head>
<body>
<?php
if($showAlert){
	echo'<div class="alert"><p>Your account is now created and you can</p></div>';
}
if($showError){
	echo'<div class="alert">'. $showError.'</div>';
}
?>
<div class="container">
	<center>
		<h1>B.S. Anangpuria Institute of Technology and Management</h1>
</center>
	<center><div class="box">
		<form action="/Project20cse48/singup.php" method="POST">
         <h1 style="color: black; font-size: 25px;">Sign Into your account</h1>
         <br><input style="border-radius: 5px; width: 300px; outline: none; border: 2px solid grey;" type="text" name="username" id="username" placeholder="Username">
	<br><input style="border-radius: 5px; width: 300px; outline: none; border: 2px solid grey;" type="text" name="fname" id="fname" placeholder="Mobile Number"><br><input style="border-radius: 5px; width: 300px; outline: none; border: 2px solid grey;" type="password" name="password" id="password" placeholder="Password">
<br><input style="border-radius: 5px; width: 300px; outline: none; border: 2px solid grey;" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"><br>
	<button style="width: 300px; height: 35px; cursor: pointer; outline: none; border-radius: 5px; border:none; background: black; color: white; font-size: 20px;" type="submit">Sign up</button>
</form>
</div></center>
</div>
</body>
</html>