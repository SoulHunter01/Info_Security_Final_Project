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
		$id = $_POST['uid'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM OBRS.manager WHERE id='$id' AND password='$pass'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result != 0)
		{
			$sql = "UPDATE OBRS.manager SET active=1 WHERE id='$id'";
			mysqli_query($conn, $sql);
			header('Location:http://localhost/SE-OBRS/Manager/manager.php');
		}

	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>

	<center><h1>Invalid User ID or Password!</h1><br><br>

</body>
</html>
