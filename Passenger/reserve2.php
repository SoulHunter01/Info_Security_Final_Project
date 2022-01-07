<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OBRS</title>

<link rel="stylesheet" type="text/css" href="http://localhost/SE-OBRS/General/homeDesign.css" />

</head>
<body>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$sid = $_POST['sid'];
		$date = $_POST['date'];
		$nPass = $_POST['nPassenger'];
		$tfare = $_POST['tfare'];
		$amountEntered = $_POST['payment'];
		$amountReturned = $amountEntered - $tfare;

		if ($amountEntered < $tfare){?>

			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center><h1>Invalid 'Amount' entered!</h1><br><br>
	<?php
		die ();
		}

		$sql = "SELECT * FROM OBRS.schedule WHERE id='$sid'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($data);

		$source = $result['source'];
		$destination = $result['dest'];
		$time = $result['time'];
		$bus = $result['bus'];
		$seats = $result['seats'] - $nPass;

		$sql = "UPDATE OBRS.schedule SET seats='$seats' WHERE id='$sid'";
		mysqli_query($conn, $sql);

		$sql = "SELECT id FROM OBRS.passenger WHERE active=1";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($data);

		$pid = $result['id'];
		$status = "active";

		$sql = "SELECT MAX(resid) AS 'max' FROM OBRS.reservation";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($data);

		$resid = $result['max'] + 1;

		$sql = "INSERT INTO OBRS.reservation VALUES ('$resid', '$source', '$destination', '$date', '$bus', '$nPass', '$tfare', '$amountEntered', '$amountReturned', '$status', '$pid', '$sid')";
		mysqli_query($conn, $sql);
	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>

	<header>
		<div class="main">
			<div class="logo">
				<a href ="passenger.php"><img src ="http://localhost/SE-OBRS/General/logo.png"></a>
			</div>
			<ul>
				<li class="active"><a href="passenger.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>Thanks for choosing OBRS!</h1><br><br>

	<table border="true" width="30%" align="center">
		<tr><td><label>Reservation ID: </label></td><td><?php echo $resid;?></td></tr>
		<tr><td><label>Source: </label></td><td><?php echo $source;?></td></tr>
		<tr><td><label>Destination: </label></td><td><?php echo $destination;?></td></tr>
		<tr><td><label>Date: </label></td><td><?php echo $date;?></td></tr>
		<tr><td><label>No. of Pasengers: </label></td><td><?php echo $nPass;?></td></tr>
		<tr><td><label>Bus No: </label></td><td><?php echo $bus;?></td></tr>
		<tr><td><label>Total Fare: </label></td><td><?php echo $tfare;?></td></tr>
		<tr><td><label>Amount Entered: </label></td><td><?php echo $amountEntered;?></td></tr>
		<tr><td><label>Amount Returned: </label></td><td><?php echo $amountReturned;?></td></tr>
		<tr><td><label>Status: </label></td><td><?php echo $status;?></td></tr>
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
