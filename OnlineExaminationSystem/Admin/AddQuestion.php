<?php
include('AdminHeader.php');
?>
<div class="container">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-8 m-auto d-block" >
		<h2>Enter Question </h2>
		<br>
		<?php
			$con = mysqli_connect("localhost","root","","onlinetest");
		?>
		  <form method="post">
			<b>Subject </b><input type="text" name="subject" Placeholder="Subject"><br><br>
			  <b>Question </b><textarea name="question" class="form-control"></textarea><br>
			  <input type="text" name="option1" Placeholder="Enter Option A"><br><br>
			  <input type="text" name="option2" Placeholder="Enter Option B"><br><br>
			  <input type="text" name="option3" Placeholder="Enter Option C"><br><br>
			  <input type="text" name="option4" Placeholder="Enter Option D"><br><br>
			  <br>
			  <b>Correct Answer:</b><br>
			  <input type="text" name="Right" Placeholder="Correct Answer"><br><br>
			   <br>
			  <hr>
			  <input type="submit" name="submit" value="Upload" class="btn btn-primary">
			  <a href="AddQuiz.php" class="btn btn-primary">Return To Add Category</a>
		  </form>
		 
	</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
{	
	extract($_POST);
	$con = mysqli_connect("localhost","root","","onlinetest");
	$insert = mysqli_query($con,"INSERT INTO `queanstable`(`Question`, `option 1`, `option 2`, `option 3`, `option 4`, `rightAns`, `Category`) VALUES ('$question','$option1','$option2','$option3','$option4','$Right','$subject')");
	if($insert == true)
	{
		echo "<script>alert('Inserted Successfully!!!');</script>";
	}
	else
	{
		echo "<script>alert('Not');</script>";	
	}
}

?>

</body>
</html>

