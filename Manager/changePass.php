<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OBRS</title>

<link rel="stylesheet" type="text/css" href="http://localhost/SE-OBRS/General/homeDesign.css" />

</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<a href ="manager.php"><img src ="http://localhost/SE-OBRS/General/logo.png"></a>
			</div>
			<ul>
				<li class="active"><a href="manager.php">Home</a></li>
				<li><a href="viewSchedule.php">View Schedule</a></li>
				<li><a href="addBus.php">Manage Bus</a></li>
				<li><a href="addDriver.php">Manage Driver</a></li>
				<li><a href="addStaff.php">Manage Staff</a></li>
				<li><a href="reports.php">Reports</a></li>
				<li><a href="changePass.php">Password</a></li>
				<li><a href="http://localhost/SE-OBRS/General/home.php">Log Out</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br>
	<center><h1>Change Your Password</h1><br><br>

	<center><form action="changePass1.php" method="post">
		<label>Current Pssword:</label><input type="Password" name="cp" required><br>
		<label>New Password:</label><input type="Password" name="np" required><br>
		<label>Confirm Password:</label><input type="Password" name="cf" required><br><br>

		<input type="submit" value="Update"><br><br>
	</form><center>

	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

</body>

</html>
