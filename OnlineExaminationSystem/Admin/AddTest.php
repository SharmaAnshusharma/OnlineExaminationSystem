<?php
include('AdminHeader.php');
?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	</div>
	
	<div class="col-sm-8">
<h1><center><i>Upload Test</i></center></h1>	
		<form method="post" >
			
			<b>Test Heading</b><input type="text" name="testheading" class="form-control"Placeholder="Test Heading"required><br><br>
			<b>Test Description</b><textarea name="testdescription"  class="form-control"required></textarea><br><br>
			<input type="submit" name="submit" value="Upload" class="btn btn-primary col-sm-4 col-sm-8 col-sm-12">
		</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$con = mysqli_connect("localhost","root","","onlinetest");
	$insert = mysqli_query($con,"INSERT INTO `test`(`Test Heading`, `Test Description`)  VALUES ('$testheading','$testdescription')");
	if($insert == true)
	{
		echo "<script>alert('Inserted Successfully!!');</script>";
	}
	else
	{
		echo "<script>alert('Not Inserted !!');</script>";
	}
}
?>
