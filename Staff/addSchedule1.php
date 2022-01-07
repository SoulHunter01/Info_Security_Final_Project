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
		</div>
	</header>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$source = $_POST['source'];
		$dest = $_POST['dest'];
		$time = $_POST['time'];
		$fare = $_POST['fare'];
		$bus = $_POST['bus'];

		$sql = "SELECT * FROM OBRS.bus WHERE reg='$bus'";
		$data = mysqli_query($conn, $sql);

		$result = mysqli_num_rows($data);
		if ($result == 0)
		{
			echo "No Bus found with registraion # $bus";
			die();
		}

		$result = mysqli_fetch_assoc($data);
		$totalSeats = $result['capacity'];

			$sql = "SELECT MAX(id) AS 'max' FROM OBRS.schedule";
			$data = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($data);

			$id = $result['max'] + 1;

			$sql = "INSERT INTO OBRS.schedule VALUES ('$id', '$source', '$dest', '$time', '$fare', '$bus', '$totalSeats')";
			$res = mysqli_query($conn, $sql);

			if ($res) echo "<center><h1>Schedule have been registered to OBRS and its ID is: $id</h1></center>";
			else echo "<center><h1>Unexpected Error Occoured!</h1></center>";
	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>



</body>

</html>
