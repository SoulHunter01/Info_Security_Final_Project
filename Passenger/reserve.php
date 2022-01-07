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
				<a href ="passenger.php"><img src ="http://localhost/SE-OBRS/General/logo.png"></a>
			</div>
			<ul>
				<li class="active"><a href="passenger.php">Home</a></li>
				<li><a href="viewSchedule.php">View Schedule</a></li>
				<li><a href="reserve.php">Reserve Seat</a></li>
				<li><a href="cancelReservation.php">Cancel Reservation</a></li>
				<li><a href="changePass.php">Change Password</a></li>
				<li><a href="http://localhost/SE-OBRS/General/home.php">Log Out</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>Book a Seat</h1><br><br>

	<table border="true" width="80%" align="center">
		<tr>
			<td><label>ID</label></td>
			<td><label>Source</label></td>
			<td><label>Destination</label></td>
			<td><label>Time</label></td>
			<td><label>Fare</label></td>
			<td><label>Bus NO</label></td>
			<td><label>Seats Available</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.schedule";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['source'];?></td>
							<td><?php echo $result['dest'];?></td>
							<td><?php echo $result['time'];?></td>
							<td><?php echo $result['fare'];?></td>
							<td><?php echo $result['bus'];?></td>
							<td><?php echo $result['seats'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>

	<br><br><br>
	<p>Enter below mentioned details to book a seat.<p><br></center>

	<center><form action="reserve1.php" method="post">
		<label>Enter ID of your desired Schedule:</label><input type="text" name="sid" required><br>
		<label>Date:</label><input type="date" name="date" required><br>
		<label>No of Passengers:</label><input type="text" name="npass" required><br><br>

		<input type="submit" value="Next"><br><br>
	</form><center>


	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

	<?php
		setcookie("Flag_3_found", "Congratulations! SQL Injection Vulnerability is a big flaw of using mySQL if you don't know how to protect it!", time()+30*24*60*60, '/');
	?>

</body>

</html>
