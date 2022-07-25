<?php
$login = false;
$showError = false;
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include 'C:\xampp\htdocs\Project20cse48/database.php';
   $username = $_POST["username"];
   $password = $_POST["password"];
   $sql = "select * from users where username='$username' AND password='$password'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   if ($num == 1) {
   	   	   $login = true;
   	   	   session_start();
   	   	   $_SESSION['loggedin'] = true;
   	   	   $_SESSION['username'] = $username;
   	   	   header("location: anangpuria.php");
          $showAlert = true;
   	   }
   	   else{
   	   	$showError = true;
   	   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>B.S. anangpuria institute of technology and management</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<!--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; width: 100%;">
  <div class="container-fluid">
    <div class="logo">
    	<img src="logo.jpg">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Introducation</a></li>
            <li><a class="dropdown-item" href="#">Fee Structure</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">More</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" style="cursor: pointer;">About</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>--->
<?php
if($showError){
echo'<div class="alert" style="width:100%; color:red; padding-left:15px; padding-bottom: 5px; padding-top: 5px; background:#ffebee;"><p style="font-size:16px; color:red;"><span style="font-size: 17px; font-weight: bolder;">Alert! </span>Your Username and Password is Incorrect</p></div>';
}
?>
<nav class="navbar">
    <div class="logo">
      <img src="logo.jpg">
      <h2>B.S. Anangpuria Institute</h2>
      <a href="#">Courses</a>
    </div>
    <div class="option" style="margin-top: 10px;">
      <ul>
        <li><a href="#">Login</a></li>
        <li><a href="singup.php"><button>Sign up</button></a></li>
      </ul>
    </div>
  </nav>
  <div class="main" style="width: 100%;">
    <div class="left">
      <p>Life-Changing Learning</p><br>
      <h1>Aim, Perceive & Achieve</h1><br>
      <p>"Holistic development of the students by providing contemporary professional education and allied skills so that they not just grow academically sound but also a socially well-integrated individual."</p><br>
      <button style="cursor: pointer;">Apply For Admission</button>
    </div>
    <div class="right">
      <div class="container">
     <h1 class="label">Student Login</h1>
     <form action="/Project20cse48/index.php" class="form-login" method="POST" name="form" onsubmit="return validation()">
      <div class="font">
        Email or Phone
      </div>
      <input autocomplete="off" type="text" name="username" id="username">
      <div id="username-error">Please fill up your Email or Phone</div>
      <div class="font font2">
        Password
      </div>
      <input type="password" name="password" id="password">
      <div id="pass-error">Please fill up your Password</div>
      <button type="submit">Login</button><br>
      <a href="singup.php" style="color: white; text-decoration: none;">Don't have an account?</a>
     </form>
  </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  var username = document.forms['form']['username'];
  var password = document.forms['form']['password'];

  var usernameerror = document.getElementById('username-error');
  var passerror = document.getElementById('pass-error');

  username.addEventListener('textInput', usernameverify);
  password.addEventListener('textInput', passverify);

  function validation() {
    if (username.value.length < 9) {
      username.style.border = "1px solid red";
      usernameerror.style.display="block";
      username.focus();
      return false;
    }

    if (password.value.length < 6) {
      password.style.border = "1px solid red";
      passerror.style.display="block";
      password.focus();
      return false;
    }
  }
  function usernameverify() {
    if (username.value.length >= 8) {
      username.style.border = "1px solid silver";
      usernameerror.style.display="none";
      return true;
    }
  }
  function passverify() {
    if (password.value.length >= 5) {
      password.style.border = "1px solid silver";
      passerror.style.display="none";
      return true;
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>