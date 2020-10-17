<?php
include('AdminHeader.php');
?>
<div class="container">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-8">
		<h2>Enter Quiz Details</h2>
		<br>
		  <form method="post">
			  Quiz Title<input type="text" class="form-control" placeholder="Quiz Title" name="quiztitle"required><br>
			  No. of Question<input type="tel" class="form-control" placeholder="No. of Question " name="noofquestion"required><br>
			  Total Marks<input type="tel" class="form-control" placeholder="Total Marks " name="total"required><br>
			  Marks of Right Answer<input type="tel" class="form-control" placeholder="Marks of Right Ans " name="marksofrightans"required><br>
			  Marks of Wrong Answer<input type="tel" class="form-control" placeholder="- Marks of wrong Ans (Optional) " name="marksofworngans"><br>
			  Time Limit <input type="text" class="form-control" placeholder="Time Limit for Test in Seconds" name="time"required><br>
			  Description About Test<textarea class="form-control" name="description"></textarea><br><br>
			 <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
		  </form>
	</div>
</div>
</div>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$con = mysqli_connect("localhost","root","","onlinetest");
	$insert =mysqli_query($con,"INSERT INTO `quiz`(`Title`, `No. of Question`, `Total Marks`, `Right Marks`, `Wrong Marks`, `Time`, `Description`) VALUES ('$quiztitle','$noofquestion','$total','$marksofrightans','$marksofworngans','$time','$description')");
	if($insert ==true)
	{
		echo "<script>alert('Inserted'); window.location='AddQuestion.php';</script>";
	}
	else
	{
		echo "<script>alert('No');</script>";
	}
}
?>