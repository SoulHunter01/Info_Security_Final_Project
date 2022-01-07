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
		$id = $_POST['reg'];

		$sql = "SELECT * FROM OBRS.driver WHERE id='$id'";
		$data = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($data);
		if ($result == 0) {
			echo "<center><h1>Ivalid ID</h1></center>";
			die();
		}
		else{

			$sql = "DELETE FROM OBRS.driver WHERE id='$id'";
			$res = mysqli_query($conn, $sql);
			if ($res) echo "<center><h1>Deleted Successfully</h1></center>";
		}

	}
	else
	{
		die ("Not Connected because ".mysqli_connect_error());
	}
	?>



</body>

</html>
