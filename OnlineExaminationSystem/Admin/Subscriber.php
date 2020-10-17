<?php
include('AdminHeader.php');
?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	</div>
	
	<div class="col-sm-8">
		<h1><center><i>Subsicriber List</i></center></h1>
		<br>
		<table class="table table-hovered" >
		<tr>
			<th>ID</th><th>Email</th><th>Operation 1</th><th>Operation 2</th>		
		</tr>
		
			<?php
				$con = mysqli_connect("localhost","root","","onlinetest");
				$res = mysqli_query($con,"SELECT * FROM `subscriber`");
				
				while($row =mysqli_fetch_array($res))
				{
					echo "<tr>";
					?>
					<td><?php echo $row['ID'];?></td>
					<td><?php echo $row['Email'];?></td>
					<?php echo "<td><a href='DeleteSubscriber.php?ID=".$row['ID']."'class='btn btn-danger'>Delete</a></td>";?>
					<?php echo "<td><a href='Send.php?ID=".$row['ID']."'class='btn btn-success'>Send</a></td>";?>
					<?php
					echo "</tr>";
				}
			?>
		
	</div>
</div>
</body>
</html>
