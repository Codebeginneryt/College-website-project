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
	<script src="https://kit.fontawesome.com/c24795123c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="anangpuriastyle.css">
	<title>Welcome BSAITM - <?php echo $_SESSION['username'] ?></title>
</head>
<body>
	<nav class="navbar" id="home">
		<div class="first">
			<div class="logo">
				<img src="logo.jpg">
			</div>
			<div class="item">
				<div class="item1">
				<h1><i class="fa fa-paper-plane"></i>Email</h1>
				<p>bsaei@anangpuria.com</p>
				</div>
				<div class="item2">
				<h1><i class="fa fa-phone-alt"></i>Call</h1>
				<p>Call Us: +91-9289110953-57</p>
				</div>
				<button><a href="index.php">Logout</a></button>
				<p style="font-size: 16px; margin: 18px;"><?php echo $_SESSION['username'] ?></p>
			</div>
		</div>
		<div class="second">
			<div class="list">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#course">Courses</a></li>
					<li><a href="#login">Student Login</a></li>
					<li><a href="#notice">Notice</a></li>
					<li><a href="#campus">Campus</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<div class="sbar">
				<input type="text" name="" placeholder="Search">
				<i class="fas fa-search"></i>
			</div>
		</div>
	</nav>
	<div class="box1">
		<div class="text">
			<h1>B.S ANANGPURIA<br>INSTITUTE OF TECHNOLOGY AND MANAGEMENT</h1>
			<p>You can learn here many things and here many courses you can do our choice<br>with respected teachers.</p>
			<a href="#contact"><button>Contact Us</button></a>
		</div>
	</div>
	<div class="box2">
		<div class="even">
			<i class="fas fa-chalkboard-teacher"></i>
			<h1>Certified Teacher</h1>
			<p>Here all the teachers are certfied professor with they holds more experience to deserve all skills to the students.</p>
		</div>
		<div class="odd">
			<i class="fas fa-graduation-cap"></i>
			<h1>Scholarships</h1>
			<p>These are meritorious scholarships which are being awarded to the anangpuria students who perform exceptionally outstanding in the University Examinations.</p>
		</div>
		<div class="even">
			<i class="fas fa-thumbs-up"></i>
			<h1>Career Zone</h1>
			<p>The main endeavor of our placement cell is to guide & assist our students in providing all the logistics resources for their career avenues.</p>
		</div>
		<div class="odd">
			<i class="fas fa-building"></i>
			<h1>Programs</h1>
			<p>Programs include professional coursework of Management Programs, Bachelors of Pharmacy, Technology & Laws.</p>
		</div>
	</div>
	<a href="#" class="scrollup">
		<i class="fa fa-chevron-up"></i>
	</a>
	<div class="box3" id="course">
		<center><h1>Institutes under the aegis of Bhawani<br>Shanker Anangpuria Charitable Trust</h1></center>
		<div class="visit">
			<div class="visit1">
				<img src="image/law.png">
				<h2>B.S. Anangpuria<br>Institute of Law</h2>
				<p>Since 2007</p><br>
				<a href="https://bsail.anangpuria.com/" target="blank">Visit ></a>
			</div>
			<div class="visit1">
					<img src="image/pharma.png">
				<h2>B.S. Anangpuria<br>Institute of Pharmacy</h2>
				<p>Since 2003</p><br>
				<a href="https://bsaip.anangpuria.com/" target="blank">Visit ></a>
			</div>
			<div class="visit1">
					<img src="image/btech.png">
				<h2>B.S. Anangpuria<br>Institute of Technology & Management</h2>
				<p>Since 2001</p><br>
				<a href="https://bsaitm.anangpuria.com/" target="blank">Visit ></a>
			</div>
		</div>
		<div class="course">
			<h2>12 Option to start your journey as a <br>student @ anangpuria</h2><br><br>
			<h3>LLB | MBA | B.Tech (CE) | B.Tech (ECE)<br>B.Tech (IT) | B.Tech (ME) | B.Tech (CSE) | B.Pharma.<br>BBA | BCA | B.A. LL.B. | D.Pharma.</h3>
		</div>
	</div>
	<div class="box4" id="login">
		<div class="banner">
			<img src="image/banner.jpg">
		</div>
		<div class="text2">
			<h1>Student Profile Login Portal</h1>
			<p>Here you can see our all detalis regarding Attendence, Fee Deatils, Examination, Class Shedule.</p><br><br><br>
			<a href="http://ais.univnext.com/Index" target="blank">Login Here</a>
		</div>
	</div>
	<div class="box5" id="notice">
		<h1>Notice</h1>
		<div class="notice">
			<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
			<a href="resume.pdf" target="blank">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br><br>
			<a href="#">Datesheet of 3sem Btech</a> : 12th feb, 2021<br>
		</marquee>
		</div>
	</div>
	<div class="box6" id="campus">
		<div class="gallery">
			<div class="pic">
				<img src="image/build2.jpg">
				<p>Academics</p>
			</div>
			<div class="pic">
				<img src="image/computerlab.jpeg">
				<p>Computer Lab</p>
			</div>
			<div class="pic">
				<img src="image/seminar.jpg">
				<p>Seminar Hall</p>
			</div>
		</div>
		<div class="gallery">
			<div class="pic">
				<img src="image/libarary.jpg">
				<p>Library Room</p>
			</div>
			<div class="pic">
				<img src="image/student.jpg">
				<p>Project Groups</p>
			</div>
			<div class="pic">
				<img src="image/class.jpg">
				<p>Class Rooms</p>
			</div>
		</div>
	</div>
	<div class="box7" id="contact">
		<div class="touchbox">
			<div class="bx1">
				<h1>Get in Touch</h1>
			</div>
			<div class="bx1">
				<h1>REQUEST FOR <BR>PROSPECTUS</h1><br>
				<p>The online version our printes prospectus will be mailed to you once we receive your request.</p><br>
				<a href="#">Request ></a>
			</div>
			<div class="bx1">
				<h1>FOR ADMISSION</h1><br>
				<p>Students who want to bacome a part of anangpuria family, kindly contact our admission team on +91-9289110953-57.</p><br>
				<a href="#">Request ></a>
			</div>
			<div class="bx1">
				<h1>DIRECTORY</h1><br>
				<p>This electronic directory is provided for individuals who wish to contact any concerned staff member for specific query/ interest.</p><br>
				<a href="#">Request ></a>
			</div>
		</div>
	</div>
	<footer>
		<div class="foot">
			<h1>anangpuria</h1>
			<p>B.S. Anangpuria Educational Institutes, Alampur,<br> Ballabgarh-Sohna Major District Poad,<br> Faridabad-121004, Delhi-NCR, INDIA.</p>
			<p>0129-2206750-53, +91-9289110953-57<br>bsaei@anangpuria.com</p>
			<p>www.anangpuria.com</p><br>
			<center><hr width="50%"></center><br>
			<p>Privacy Policy Terms & Conditions Copyright & Trademark Contact Us &copy; 2022 anangpuria.com reserved all rights.</p>
		</div>
	</footer>
</body>
<script type="text/javascript">
	const scrollup = document.querySelector('.scrollup');
window.addEventListener('scroll', () => {
	if (window.pageYOffset > 100) {
		scrollup.classList.add("active");
	}
	else{
		scrollup.classList.remove("active");
	}
})
</script>
</html>