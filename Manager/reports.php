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
	<br><br><br><br><br><br><br><br><br>

	<center><h1>Reservations</h1><br><br>
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
				$sql = "SELECT * FROM OBRS.reservation where status='active'";
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

	<center><h1>Canceled Reservations</h1><br><br>
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
				$sql = "SELECT * FROM OBRS.reservation where status='canceled'";
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

	<center><h1>Staff Members</h1><br><br>
		<table border="true" width="90%" align="center">
		<tr>
			<td><label>Staff ID</label></td>
			<td><label>Name</label></td>
			<td><label>Address</label></td>
			<td><label>Phone</label></td>
			<td><label>Password</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.staff";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['address'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['password'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>
	<br><br><br>

	<center><h1>Drivers</h1><br><br>
		<table border="true" width="90%" align="center">
		<tr>
			<td><label>Driver ID</label></td>
			<td><label>Name</label></td>
			<td><label>Address</label></td>
			<td><label>Phone</label></td>
			<td><label>Salary</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.driver";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['address'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['salary'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>
	<br><br><br>

	<center><h1>Buses</h1><br><br>
		<table border="true" width="90%" align="center">
		<tr>
			<td><label>Registraion #</label></td>
			<td><label>Model</label></td>
			<td><label>Company</label></td>
			<td><label>Color</label></td>
			<td><label>Capacity</label></td>
			<td><label>Driver ID</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.bus";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['reg'];?></td>
							<td><?php echo $result['model'];?></td>
							<td><?php echo $result['Company'];?></td>
							<td><?php echo $result['Color'];?></td>
							<td><?php echo $result['capacity'];?></td>
							<td><?php echo $result['driver'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>
	<br><br><br>

	<center><h1>Users</h1><br><br>
		<table border="true" width="90%" align="center">
		<tr>
			<td><label>ID</label></td>
			<td><label>Name</label></td>
			<td><label>Address</label></td>
			<td><label>Phone</label></td>
			<td><label>Password</label></td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root", "", "obrs");
			if ($conn)
			{
				$sql = "SELECT * FROM OBRS.passenger";
				$data = mysqli_query($conn, $sql);
				while ($result = mysqli_fetch_assoc($data)){?>

						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['address'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['p1'];?></td>
						</tr>
		<?php		}
			}
		?>

	</table>
	<br><br><br>

	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

</body>

</html>
