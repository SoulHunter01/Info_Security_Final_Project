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
		$cp = $_POST['cp'];
		$np = $_POST['np'];
		$cf = $_POST['cf'];

		$sql = "SELECT id FROM OBRS.passenger WHERE active=1 AND password='$cp'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result != 0) {
			if ($np == $cf){

				$result = mysqli_fetch_assoc($data);
				$id = $result['id'];
				$sql = "UPDATE OBRS.passenger SET password='$np' WHERE id='$id'";
				$res = mysqli_query($conn, $sql);
				if ($res) header('Location:http://localhost/SE-OBRS/Passenger/passenger.php');
			}
			else{
				echo "<center><h1>Invalid Password!</h1><br><br>";
			}
		}
		else
		{
			echo "<center><h1>Invalid Password!</h1><br><br>";
		}
	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>



</body>
</html>
