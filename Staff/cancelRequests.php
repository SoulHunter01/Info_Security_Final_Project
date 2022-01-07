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
				<li class="active"><a href="staff.php">Home</a></li>
				<li><a href="viewSchedule.php">View Schedule</a></li>
				<li><a href="addSchedule.php">Manage Schedule</a></li>
				<li><a href="cancelRequests.php">Cancel Requests</a></li>
				<li><a href="changePass.php">Change Password</a></li>
				<li><a href="http://localhost/SE-OBRS/General/home.php">Log Out</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br>
	<center><h1>Pending requests for cencelation!</h1><br><br>

	<table border="true" width="90%" align="center">
		<tr>
			<td><label>Reservation ID</label></td>
			<td><label>Source</label></td>
			<td><label>Destination</label></td>
			<td><label>Date</label></td>
			<td><label>Bus No</label></td>
			<td><label>Passengers</label></td>
			<td><label>Bill</label></td>
			<td><label>Amount Paid</label></td>
			<td><label>Amount Returned</label></td>
			<td><label>Status</label></td>
			<td><label>Passenger ID</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.reservation where resid in(select resid from OBRS.cancel)";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['resid'];?></td>
							<td><?php echo $result['source'];?></td>
							<td><?php echo $result['dest'];?></td>
							<td><?php echo $result['date'];?></td>
							<td><?php echo $result['bus'];?></td>
							<td><?php echo $result['noOfp'];?></td>
							<td><?php echo $result['total'];?></td>
							<td><?php echo $result['ae'];?></td>
							<td><?php echo $result['ar'];?></td>
							<td><?php echo $result['status'];?></td>
							<td><?php echo $result['pid'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>
	<br><br><br>

	<p>Enter reservation id you wanna confirm cancelation.<p><br></center>

	<center><form action="cancelRequest1.php" method="post">
		<label>ID:</label><input type="text" name="id" required><br><br>
		<input type="submit" value="Confirm"><br><br>
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
