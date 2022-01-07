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
				<li class="active"><a href="addDriver.php">Back</a></li>
			</ul>
		</div>
	</header>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$sal = $_POST['sal'];

		if (strlen($phone) < 11 || strlen($phone) > 11){
			echo "<center><h1>Invalid Phone number!</h1>";
			die();
		}

		if(!preg_match('/^[0]{1}[3]{1}[0-4]{1}[0-9]{8}$/', $phone))
	    {
	      echo "<center><h1>Invalid Phone number!</h1>";
			die();
	    }
		else
		{
			$sql = "SELECT MAX(id) AS 'max' FROM OBRS.driver";
			$data = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($data);

			$id = $result['max'] + 1;

			$sql = "INSERT INTO OBRS.driver VALUES ('$id', '$name', '$address', '$phone', '$sal')";
			mysqli_query($conn, $sql);

			echo "<center><h1>Staff has been registered to OBRS and your login ID is: $id</h1>";
		}

	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>


</body>

</html>
