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
		$id = $_POST['sid'];
		$date = date('d-m-Y', strtotime($_REQUEST['date']));
		$pass = $_POST['npass'];
		$sql = "SELECT * FROM OBRS.schedule WHERE id='$id' AND seats>='$pass'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result == 0){?>

			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center><h1>Invalid 'ID' or 'No. of Passengers' entered!</h1><br><br>
	<?php
		die ();
		}

		$result = mysqli_fetch_assoc($data);
		$fare = $result['fare'] * $pass;

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
				<li class="active"><a href="reserve.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br>

	<center><img src="http://localhost/SE-OBRS/General/home1.png" width="1250" height="370"/></center>
	<br><br>
	<center><h1>Payment</h1><br><br>
	<p>Please pay Rs. "<?php echo $fare; ?> "</p></center><br>

<?php

	echo "<center><form action='reserve2.php' method='post'>";
		echo "<label>Amount:</label><input type='text' name='payment' required><br><br>";
		echo "<input type='hidden' name='sid' value='$id'>";
		echo "<input type='hidden' name='tfare' value='$fare'>";
		echo "<input type='hidden' name='nPassenger' value='$pass'>";
		echo "<input type='hidden' name='date' value='$date'>";
		echo "<input type='submit' value='Finish'><br><br>";
	echo "</form><center>";

?>

	 <center><footer>
	  <p1>
			Twitter: <a href="https://twitter.com/faisalmovers?lang=en">https://twitter.com/OBRS?lang=en</a><br>
			Facebook: <a href="https://www.facebook.com/FaisalMovers/">https://www.facebook.com/OBRS/</a><br>
			About Us: <a href="http://localhost/SE-OBRS/about.php">http://OBRS.About_Us.com</a><br><br>
			Copyright © 2020.OBRS</p1>
	</footer></center>

</body>
</html>
