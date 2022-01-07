<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>OBRS</title>

<link rel="stylesheet" type="text/css" href="http://localhost/SE-OBRS/General/homeDesign.css" />

</head>
<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$id = $_POST['id'];

		$sql = "SELECT sid, noOfp FROM OBRS.reservation WHERE resid='$id'";
		$data = mysqli_query($conn, $sql);

		$result = mysqli_num_rows($data);
		if ($result == 0)
			{
				echo "<center><h1>Invalid Reservation ID</h1><br><br>";
				die();
			}

		$result = mysqli_fetch_assoc($data);

		$sid = $result['sid'];
		$p = $result['noOfp'];

		$sql = "SELECT seats FROM OBRS.schedule WHERE id='$sid'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($data);

		$s = $p + $result['seats'];

		$sql = "UPDATE OBRS.schedule SET seats='$s' WHERE id='$sid'";
		$data = mysqli_query($conn, $sql);

		$sql = "UPDATE OBRS.reservation SET status='canceled' WHERE resid='$id'";
		$data = mysqli_query($conn, $sql);

		$sql = "DELETE FROM OBRS.cancel WHERE resid='$id'";
		$data = mysqli_query($conn, $sql);


		header('Location:http://localhost/SE-OBRS/Staff/cancelRequests.php');

	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>

</body>
</html>
