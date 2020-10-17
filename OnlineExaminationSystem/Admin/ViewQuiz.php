<?php
include('AdminHeader.php');
?>
<div class="container">
	<div class="row">
	<?php
	$con = mysqli_connect("localhost","root","","onlinetest");
	$reslut =mysqli_query($con,"SELECT * FROM `question` ");
		
	?>
		<div class="col-sm-2">
		</div>
		<div class="col-lg-8 m-auto d-block">
		<h1>Question Category.</h1>
		<br><br>
		<table class="table table-hover" border="1px">
		<tr>
		<th>SR No.</th><th>Topic</th><th>No. Of Question</th><th>Total Makrs</th><th>Right Marks</th><th>Minus Marks</th><th>Time Sec</th><th>Action</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","onlinetest");
		$result = mysqli_query($con,"SELECT * FROM `quiz` ");
		while($row = mysqli_fetch_array($result))
		{
		?>
		<tr>
		<td><?php echo $row['ID'];?></td>
		<td><?php echo $row['Title'];?></td>
		<td><?php echo $row['No. of Question'];?></td>
		<td><?php echo $row['Total Marks'];?></td>
		<td><?php echo $row['Right Marks'];?></td>
		<td><?php echo $row['Wrong Marks'];?></td>
		<td><?php echo $row['Time'];?></td>
		<?php echo "<td><a href='DeleteQuiz.php?Title=".$row['Title']."'class='btn btn-danger btn-lg'>Delete </a></td>";?>
		</tr>
		<?php
		}
		?>
		</table>
		
	</div>
	
	</div>
</div>
</body>
</html>
