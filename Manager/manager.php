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

	<center><img src="http://localhost/SE-OBRS/General/welcome.png" width="700" height="350"/></center>
	<br>
	<center><h1>Welcome To OBRS!</h1><br><br>
	<p hidden>Congratulations! Flag 2 Found Successfully</p>
	<p hidden>I love when someone reserves the seats for the travelling! I love money!</p>

	<table border="true" width="90%" align="center">
		<tr>
			<td><label>ID</label></td>
			<td><label>Password</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.manager where active=1";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['password'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>

	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

</body>

</html>
