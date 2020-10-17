<?php
session_start();
error_reporting(0);
?>
<html>
<html>
<head>
<title>Online Examination System</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head>
<body>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];

		$con = mysqli_connect("localhost","root","","onlinetest");
		$res = mysqli_query($con,"SELECT * FROM `user` WHERE `Email` = '$email' and `Confirm` = '$password'");
		$row = mysqli_fetch_array($res);
		$name = $row['Name'];
		?>
<?php
if(isset($_POST['submit']))
{
	$subject = $_SESSION['Title'];
	$checked = $_POST['quizcheck'];
	$con = mysqli_connect("localhost","root","","onlinetest");
	$result = mysqli_query($con,"SELECT * FROM `queanstable` WHERE `Category`= '$subject' ");
	
	
	$total = 0;

	while($row = mysqli_fetch_array($result))
	{
			$i= $row['ID'];
			if($checked[$i] == $row['rightAns'])
			{
				$total++;
			}
			
			$i++;
	}
	
	$insert = mysqli_query($con,"INSERT INTO `result`(`Name`, `Email`, `Subject`, `Marks`) VALUES ('$name','$email','$subject','$total')");
	
}

?>		<br><br><br><br><br><br><br><br>
		<div class="container">
			<div class="jumbotron">
				<h1>You Have Successfully Submitted your <?php echo $subject ?> Test.</h1>
				<br><br><br>
				<a href="index.php" class="btn btn-primary">Go Back</a>
			</div>
		</div>
		
	
</body>
</html>