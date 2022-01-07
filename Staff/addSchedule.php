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
				<a href ="staff.php"><img src ="http://localhost/SE-OBRS/General/logo.png"></a>
			</div>
			<ul>
				<li class="active"><a href="addSchedule.php">Add Schedule</a></li>
				<li><a href="delSchedule.php">Delete Schedule</a></li>
				<li><a href="staff.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>
	
	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>Add new Schedule</h1><br>
	<p>Please fill the given form to add new schedule!<p><br></center>

	<center><form action="addSchedule1.php" method="post">
		<label>Source:</label><input type="text" name="source" required><br>
		<label>Destination:</label><input type="text" name="dest" required><br>
		<label>Time:</label><input type="text" name="time" placeholder="10:30am/AM" required><br>
		<label>Fare(Rs):</label><input type="text" name="fare" required><br>
		<label>Bus No:</label><input type="text" name="bus" placeholder="SGM-1234" required><br><br>
		<input type="submit" value="ADD"><br><br>
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