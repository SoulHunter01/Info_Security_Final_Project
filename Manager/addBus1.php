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
		</div>
	</header>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "obrs");
	if ($conn)
	{
		$reg = $_POST['reg'];
		$mod = $_POST['mod'];
		$com = $_POST['com'];
		$col = $_POST['col'];
		$cap = $_POST['cap'];
		$dri = $_POST['dri'];

		$sql = "SELECT * FROM OBRS.driver WHERE id='$dri'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result == 0) {
			echo "<center><h1>Ivalid Driver ID</h1></center>";
			die();
		}

			$sql = "INSERT INTO OBRS.bus VALUES ('$reg', '$mod', '$com', '$col', '$cap', '$dri')";
			$res = mysqli_query($conn, $sql);

			if ($res) echo "<center><h1>Bus has been registered to OBRS.</h1></center>";
			else echo "<center><h1>Unexpected Error Occoured!</h1></center>";
	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>



</body>

</html>
