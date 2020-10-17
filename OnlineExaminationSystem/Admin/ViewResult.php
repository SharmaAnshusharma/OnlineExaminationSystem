<?php
include('AdminHeader.php');

?>
<br><br>
<div class="container ">
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
	<h2>Your Results</h2>
	<br><hr>
	<?php
	
		$con = mysqli_connect("localhost","root","","onlinetest");
		$result = mysqli_query($con,"SELECT * FROM `result`");
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
</div>			
</div>		