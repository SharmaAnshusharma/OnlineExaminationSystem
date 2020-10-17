<?php
include('AdminHeader.php');
?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4">
	</div>
	
	<div class="col-sm-8">
		<h1><center><i>Featured Test </i></center></h1>
		<br>
		<table class="table table-hovered" >
		<tr>
			<th>Test Heading</th><th>Test Description</th><th>Operation 1</th><th>Operation 2</th>		
		</tr>
		
			<?php
				$con = mysqli_connect("localhost","root","","onlinetest");
				$res = mysqli_query($con,"SELECT * FROM `test`");
				while($row =mysqli_fetch_array($res))
				{
					echo "<tr>";
					?>
					<td><?php echo $row['Test Heading'];?></td>
					<td><?php echo $row['Test Description'];?></td>
					<?php echo "<td><a href='ViewTestDelete.php?ID=".$row['ID']."'class='btn btn-danger'>Delete</a></td>";?>
					<?php echo "<td><a href='ViewTestEdit.php?ID=".$row['ID']."'class='btn btn-success'>Edit</a></td>";?>
					<?php
					echo "</tr>";
				}
			?>
		
	</div>
</div>
</body>
</html>
