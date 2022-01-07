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
				<li class="active"><a href="loginPass.php">Back</a></li>
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
		$p1 = $_POST['pass1'];
		$p2 = $_POST['pass2'];

		if (strlen($phone) < 11 || strlen($phone) > 11){
			echo "<center><h1>Invalid Phone number!</h1>";
			die();
		}
		
		if(!preg_match('/^[0]{1}[3]{1}[0-4]{1}[0-9]{8}$/', $phone))
	    {
			echo "<center><h1>Invalid Phone number!</h1>";
			die();
	    }


		if ($p1 != $p2)
		{
			echo "<center><h1>Passwords doesn't match!</h1>";
			die();
		}
		else
		{
			$sql = "SELECT MAX(id) AS 'max' FROM OBRS.passenger";
			$data = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($data);

			$id = $result['max'] + 1;
			$status = 0;

			$sql = "INSERT INTO OBRS.passenger VALUES ('$id', '$name', '$address', '$phone', '$p1', '$status')";
			mysqli_query($conn, $sql);

			echo "<center><h1>You have been registered to OBRS and your login ID is: $id</h1>";
		}

	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());	
	}
	?>

	
</body>

</html>