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
				<li class="active"><a href="addDriver.php">Add Driver</a></li>
				<li><a href="delDriver.php">Delete Driver</a></li>
				<li><a href="manager.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>Add new Driver</h1><br>
	<p>Please fill the given form to add new Driver!<p><br></center>

	<center><form action="addDriver1.php" method="post">
		<label>Name:</label><input type="text" name="name" required><br>
		<label>Phone:</label><input type="text" name="phone" required><br>
		<label>Address:</label><input type="text" name="address" required><br>
		<label>Salary:</label><input type="text" name="sal" required><br><br>
		<input type="submit" value="Register"><br><br>
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
