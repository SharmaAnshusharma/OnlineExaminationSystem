<?php
include('AdminHeader.php');
?>
<div class="container">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<h3>Registered User</h3>
			<br><br>
			<table class="table table-hover" border="1px">
			<tr>
			<th>Name</th><th>Email</th><th>Password</th><th>College</th><th>Contact</th><th>Operation</th>
			</tr>
			<?php
				$con = mysqli_connect("localhost","root","","onlinetest");
				$result = mysqli_query($con,"SELECT * FROM `user`");
				while($row = mysqli_fetch_array($result))
				{
					
			?>
			<tr>
			<td><?php echo $row['Name'];?></td><td><?php echo $row['Email'];?></td><td><?php echo $row['Confirm'];?></td>
			<td><?php echo $row['College'];?></td><td><?php echo $row['Contact'];?></td>
			<?php echo "<td><a href='DeleteRegister.php?Name=".$row['Name']."'class='btn btn-danger'>Delete</a></td>";?>
			</tr>
			<?php
				}
			?>
		</div>
	</div>
</div>
</body>
</html>