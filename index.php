<?php

include("seen.php");
if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$youremail= $_POST['youremail'];
$yourusername = $_POST['yourusername'];
$yourpassword= $_POST['yourpassword'];

mysqli_query($con,"INSERT INTO users (firstname, youremail, yourusername,yourpassword)
VALUES ('$firstname','$youremail','$yourusername','$yourpassword')");



mysqli_close($con);

 
}



?>




<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>کلاس مبتنی بر وب</title>
<link rel="stylesheet" href="styles/style1.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/myjquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>

<body>
<header>
		<h1>برنامه نویسی مبتنی بر وب</h1>
	
</header>
<nav class="myMenu"  >
	<ul>
		<li><a href="#" class="active">صفحه اصلی</a></li>
		<li><a href="#">سورس کد</a></li>
		<li><a href="#">پروژه</a></li>
		<li><a href="#">تماس با ما</a></li>
	</ul>
</nav>
<!--main-->
	<div class="main">
		
	
		<!--content -->
		<section>
			<div class="content">
				<article>
				</br>
				<center></center>
                    </br>
                    <div class="form">
                        <form id="contactform" method="post" action="index.php" enctype="multipart/form-data">
                            <p class="contact"><label for="name">Name</label></p>
                            <input id="name" name="firstname" placeholder="First and last name" required="" tabindex="1" type="text">

                            <p class="contact"><label for="email">Email</label></p>
                            <input id="email" name="youremail" placeholder="example@domain.com" required="" type="email">

                            <p class="contact"><label for="username">Create a username</label></p>
                            <input id="username" name="yourusername" placeholder="username" required="" tabindex="2" type="text">

                            <p class="contact"><label for="password">Create a password</label></p>
                            <input type="password" id="password" name="yourpassword" required="">
                         
                    
                            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
                        </form>
</article>
				<br>
			</div>
		</section>

		<!--sidebar -->
		<aside>

			<div class="sidebar">
				<ul>
					<li><h3>آموزش HTML</h3></li>
					<li><a href="#">چندرسانه ای</a></li>
					<li><a href="#">فرم</a></li>
					<li><a href="#">آزمون</a></li>
					<li><h3>آموزش CSS</h3></li>
					<li><a href="#">انتخابگرها</a></li>
					<li><a href="#">طرح بندی</a></li>
					<li><a href="#">آزمون</a></li>
					<li><h3>آموزش Javascript</h3></li>
					<li><a href="#">انتخابگرها</a></li>
					<li><a href="#">طرح بندی</a></li>
					<li><a href="#">آزمون</a></li>
					<li><h3>آموزش PHP</h3></li>
					<li><a href="#">متغیرها</a></li>
					<li><a href="#">طرح توابع</a></li>
					<li><a href="#">شی گرائی</a></li>
				</ul>
			</div>
		
		</aside>
	</div>


<footer>
	<div class="copyright">
		<p>طراحی شده توسط m.nemati@ تمامی حقوق محفوظ است. 97-1396 </p>
	</div>
	<div class="socials">
		<ul>
			<li><a href="#" target="_blank"><img src="images/telegram.png" alt="Telegram Icon"></a></li>
			<li><a href="#" target="_blank"><img src="images/gp.png" alt="Google Pluse Icon"></a></li>
			<li><a href="#" target="_blank"><img src="images/insta.png" alt="Instagarm Icon"></a></li>
			<li><a href="#" target="_blank"><img src="images/aparat.png" alt="Aparat Icon"></a></li>
			<li><a href="#" target="_blank"><img src="images/twitter.png" alt="twitter icon"></a></li>
		</ul>
	</div>
</footer>
<img src="images/top.png" alt="to top button" id="to_top">
</body>
</html>

 