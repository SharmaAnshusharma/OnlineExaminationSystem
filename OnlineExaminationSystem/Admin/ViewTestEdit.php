<?php
include('AdminHeader.php');
?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	</div>
	
	<div class="col-sm-8">
		
			<?php
				$id = $_GET['ID'];
				$con = mysqli_connect("localhost","root","","onlinetest");
				$res = mysqli_query($con,"SELECT * FROM `test` WHERE `ID`= '$id'");
				$row =mysqli_fetch_array($res);
			?>
			<form method="post" >
				<b>Test Heading</b><input type="text" name="testheading" value="<?php echo $row['Heading'];?>" class="form-control"Placeholder="Test Heading"><br><br>
				<b>Test Description</b><input type="text" name="testdescription" value="<?php echo $row['Description'];?>" class="form-control"><br><br>
				<input type="submit" name="submit" value="Update" class="btn btn-primary col-sm-4 col-sm-8 col-sm-12">
			</form>
			
		
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
$heading = $_POST['testheading'];
$description = $_POST['testdescription'];
$con = mysqli_connect("localhost","root","","onlinetest");
$insert = mysqli_query($con,"UPDATE `test` SET `Heading`='$heading',`Description`='$description' WHERE `ID` ='$id'; ");
if($insert == true)
{
	echo "<script>alert('Updated Successfully!!');</script>";
	echo "<script>window.location='ViewTest.php'</script>";
	exit;
}
else
{
	echo "<script>alert('Not Inserted !!');</script>";
	echo "<script>window.location='ViewTestEdit.php'</script>";
	exit;
}
}

?>

