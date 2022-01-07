<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OBRS</title>

<link rel="stylesheet" type="text/css" href="homeDesign.css" />

</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<a href ="home.php"><img src ="logo.png"></a>
			</div>
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="http://localhost/SE-OBRS/Passenger/loginPass.php">Passenger</a></li>
				<li><a href="http://localhost/SE-OBRS/Manager/loginMan.php">Manager</a></li>
				<li><a href="http://localhost/SE-OBRS/Staff/loginStaff.php">Staff</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$sql = "UPDATE OBRS.passenger SET active=0";
		mysqli_query($conn, $sql);

		$sql = "UPDATE OBRS.staff SET active=0";
		mysqli_query($conn, $sql);

		$sql = "UPDATE OBRS.manager SET active=0";
		mysqli_query($conn, $sql);
	}
	?>

	<center><img src="home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>What is OBRS?</h1><br><br>
	<p>Bus Reservation System is designed to automate the online ticket purchasing through an easy-to-use online bus booking system. Embed our online bus ticketing system into your website and enable your customers to book tickets for various routes and destinations. With the bus ticket reservation system, you can manage reservations, client data, and passenger lists. You can also schedule routes, set seat availability, upload an interactive seat map and let customers select their seats.<p><br></center>
	<center><h1>Product Highlights</h1><br><br>
	<p>Help your customers organize their trips and daily commutes more easily. Process bookings and payments online, manage your business more efficiently. Check the key features that come standard with the bus ticket reservation system. To request any other fine-tuning, just contact us!<p><br></center>
	<br><br>
	<center><img src="home2.png" width="1200" height="400"/></center>
	<br><br>

	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

</body>

</html>
