<html>
<head>
<title></title>
</head>
<body>
<?php
	$name = $_GET['Name'];
	$con = mysqli_connect("localhost","root","","onlinetest");
	$delete= mysqli_query($con,"DELETE FROM `user` WHERE `Name` = '$name'");
	if($delete == true)
	{
		echo "<script>alert('Deleted Successfully!')</script>";
		echo "<script>window.location='ViewRegister.php'</script>";
		exit;
	}
	else
	{
		echo "<script>alert('Problem in Deleting the Recored')</script>";
		exit;
	}

?>
</body>
</html>