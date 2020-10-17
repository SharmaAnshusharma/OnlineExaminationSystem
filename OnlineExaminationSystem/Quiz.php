<?php
session_start();
$con = mysqli_connect("localhost","root","","onlinetest");
$result = mysqli_query($con,"SELECT `Time` FROM `quiz`");
$row = mysqli_fetch_array($result);
$time = $row['Time'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

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

<script>
var seconds =<?php echo $time;?> ;
    function secondPassed()
	{
		var minutes = Math.round((seconds - 30)/60);
		var remainingSeconds = seconds % 60;
		if (remainingSeconds < 10)
		{
			remainingSeconds = "0" + remainingSeconds; 
		}
		document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
		if (seconds == 0)
		{
			clearInterval(countdownTimer);
			document.getElementById('countdown').innerHTML =alert( "Your Time is Over ");
			
		}
		else
		{    
			seconds--;
		}
	}
var countdownTimer = setInterval('secondPassed()', 1000);

</script>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Online Test</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	 <li class="nav-item active">
        <a class="nav-link">Timer : <span id="countdown" class="timer" style="color:white"></span></a>
      </li>
	  	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

		<?php
		$con = mysqli_connect("localhost","root","","onlinetest");
		$res = mysqli_query($con,"SELECT * FROM `user` WHERE `Email` = '$email' and `Confirm` = '$password'");
		$row = mysqli_fetch_array($res);
		$name = $row['Name'];
		?>
		<span style="color:white;margin-top:8px;"><?php echo "Hi..... ".$name;?></span>	  
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	  <li class="nav-item active">
        <a class="nav-link " href="index.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
 	
<br><br><br>
 	<span id="countdown" class="timer"></span>
<div class="row">
	<div class="col-lg-8 m-auto d-block">
	
		<form method="post" action="Check.php">
		<?php
			
			$name = $_GET['Title'];
			$_SESSION['Title'] = $name;
			$con = mysqli_connect("localhost","root","","onlinetest");
			$res = mysqli_query($con,"SELECT * FROM `queanstable` WHERE `Category` = '$name' ");
			$length =mysqli_num_rows($res);
			for($i=1;$i<=$length;$i++)
			{
				while($row = mysqli_fetch_array($res))
				{
				?>
				<div class="card">
				  <div class="card-header"><?php echo "Question No.  -<br><b>". $row['Question']."</b>";?></div>
					<div class="card-body">
						<input type="radio" name="quizcheck[<?php echo $row['ID'];?>]" value="<?php echo $row['option 1'];?>">
						<?php echo $row['option 1'];?><br>
						<input type="radio" name="quizcheck[<?php echo $row['ID'];?>]" value="<?php echo $row['option 2'];?>">
						<?php echo $row['option 2'];?><br>
						<input type="radio" name="quizcheck[<?php echo $row['ID'];?>]" value="<?php echo $row['option 3'];?>">
						<?php echo $row['option 3'];?><br>
						<input type="radio" name="quizcheck[<?php echo $row['ID'];?>]" value="<?php echo $row['option 4'];?>">
						<?php echo $row['option 4'];?><br>
								
					  </div>
					<?php
					
								
				}
				
			}

				?>
			<input type="submit" name="submit" value="Submit Test"  class="btn btn-primary col-sm-4">
		
	</div>
	</form>
</div>	
</body>
</html>
