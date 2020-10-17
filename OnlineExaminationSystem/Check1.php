
<?php
error_reporting(0);
?>
<html>
<head>
<title>Online Examination System</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$con =mysqli_connect("localhost","root","","onlinetest");
if(isset($_POST['submit']))
{
	if(!empty($_POST['quizcheck']))
	{
		$count = count($_POST['quizcheck']);
		?>
		<?php
		
		$total = 0;
		
		$selected = $_POST['quizcheck'];//fetched value 
		$result = mysqli_query($con,"SELECT * FROM `question` ");
		$i =1;
		while($row = mysqli_fetch_array($result))
		{
			 $id = $selected[$i];
			$result1 = mysqli_query($con,"SELECT * FROM `answer` WHERE `aid` = '$id' ");
			while($rows = mysqli_fetch_array($result1))
			{
				
				if($row['ans_id'] == $rows['OptionCheck'])
				{
					$total++;
				}
				
			}
			$i++;
		}
		?>
		<br><br><br><br><br><br><br><br>
		<div class="container">
			<div class="jumbotron">
				<h2>Out of 10 You have Selected  <span class="text-primary"><?php echo  $count; ?></span> Options</h2>
				<h3><br>Your scroe is <span class="text-primary"><?php echo $total;?></span></h3>
			</div>
		</div>
		
	
	<?php	
	}
}
		
?>
</body>
</html>