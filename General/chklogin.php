<?php
$conn = mysqli_connect("localhost", "root", "", "obrs");
if ($conn)
{
	echo "Connected!";
	$sql = "SELECT * FROM OBRS.passenger";
	$data = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($data);
	echo $result['id'];
}
else
{
	die ("Not Connected because ".mysqli_connect_error());
}
?>
