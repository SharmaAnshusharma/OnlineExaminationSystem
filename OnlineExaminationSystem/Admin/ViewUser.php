<?php
include('AdminHeader.php');
?>
<div class="container">
	<h3>Registered User</h3>
	<table>
	<tr>
	<th>User ID</th><th>Name</th><th>Email</th><th>Password</th><th>College</th><th>Contact</th>
	</tr>
	<?php
		$con = mysqli_connect("localhost","root","","onlinetest");
		$result = mysqli_query($con,"SELECT * FROM `user`");
		while($row = mysqli_fetch_array($result))
		{
			
	?>
	<tr>
	<td><?php echo $row['ID'];?></td><td><?php echo $row['Name'];?></td><td><?php echo $row['Email'];?></td><td><?php echo $row['Password'];?></td>
	<td><?php echo $row['College'];?></td><td><?php echo $row['Contact'];?></td>
	</tr>
	<?php
		}
	?>
</div>
</body>
</html>