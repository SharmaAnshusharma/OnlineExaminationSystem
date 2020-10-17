<?php
include('AdminHeader.php');
?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-8">
		<h1><center><i>Contact List</i></center></h1>
		<br>
		<table class="table table-hovered" >
		<tr>
			<th>Name</th><th>Email</th><th>Contact</th><th>Message</th><th>Operation</th>		
		</tr>
			<?php
			echo "<tr>";
				$con = mysqli_connect("localhost","root","","onlinetest");
				$res = mysqli_query($con,"SELECT * FROM `contact`");
				while($row =mysqli_fetch_array($res))
				{
					?>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Email'];?></td>
					<td><?php echo $row['Contact'];?></td>
					<td><?php echo $row['Message'];?></td>
					<?php echo "<td><a href='delete.php?ID=".$row['ID']."'class='btn btn-danger'>Delete</a></td>";?>
					<?php
					echo "</tr>";
				}
			?>
		
		</div>
</div>
</body>
</html>