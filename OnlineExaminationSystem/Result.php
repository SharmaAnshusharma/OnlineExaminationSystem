<br><br>
<div class="container">
	<h2>Your Results</h2>
	<br><hr>
	<?php
	session_start();
	include('bootstrapFiles.php');
	$email = $_SESSION['email'];
		$con = mysqli_connect("localhost","root","","onlinetest");
		$result = mysqli_query($con,"SELECT * FROM `result` WHERE `Email` = '$email'");
	?>
		<table class="table table-hover">
		<tr>
			<th>Name</th><th>Email</th><th>Subject</th><th>Marks</th>
		</tr>
	<?php
	while($row = mysqli_fetch_array($result))
	{
	?>
		<tr>
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Subject'];?></td>
			<td><?php echo $row['Marks'];?></td>
		</tr>
	<?php
	}
	?>
	</table>				
<a href="index.php" class="btn btn-primary">Go Back to Search</a>
</div>			
		