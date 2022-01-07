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
				<li class="active"><a href="cancelReservation.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$id = $_POST['id'];
		$reason = $_POST['reason'];
		$sql = "SELECT * FROM OBRS.reservation WHERE resid='$id'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result != 0) {
			$sql = "INSERT INTO OBRS.cancel VALUES ('$id', '$reason')";
			mysqli_query($conn, $sql);
			echo "<center><h1>Your request has been sent to OBRS.</h1><br><br>";
		}
		else
			echo "<center><h1>Invalid ID entered!</h1><br><br>";
	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>


</body>

</html>
