<html>
<head>
<title></title>
</head>
<body>
<?php
	$id = $_GET['ID'];
	$con = mysqli_connect("localhost","root","","onlinetest");
	$delete= mysqli_query($con,"DELETE FROM `answer` WHERE `ID` = '$id'");
	if($delete == true)
	{
		echo "<script>alert('Deleted Successfully!')</script>";
		echo "<script>window.location='ViewQuiz.php'</script>";
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