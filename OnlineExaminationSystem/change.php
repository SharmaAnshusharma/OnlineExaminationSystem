    <?php
		include('bootstrapFiles.php');
	?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Online Examination System</title>
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
                         <h1><a class="navbar-brand" href="index.html">Online Examination System
							<span>Test Yourself!!</span>
						</a></h1>

                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								
								<li class="nav-item active mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="about.php">About Us</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact Us</a>
								</li>
					</ul>
				</div>
			</nav>
	</div>
	
<!--/newsletter-->
<br><br><br><br>

<div class="container">
	<div class="row">
	
		<div class="col-lg-8 m-auto d-block">
	<center><h2>Change Password</h2></center>
	<br>
			<form method="post" >
				<div class="input-group mb-3">
					<div class="input-group-append">
					<span class="input-group-text">Email</span>
					</div>
					<input type="email" name="email" class="form-control"required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-append">
					<span class="input-group-text">Last Password</span>
					</div>
					<input type="password" name="lpwd" class="form-control"required>
				</div>
				<div class="input-group mb-3">
					<div class="input-group-append">
					<span class="input-group-text">New Password</span>
					</div>
					<input type="password" name="password" class="form-control"required>
				</div>
				<input type="submit" name="submit" value="Change" class="btn btn-success col-sm-3 col-sm-6 col-sm-12">
			</form>
			
		</div>
	</div>
</div>


	<?php
   
   if(isset($_POST['submit']))
   {
	   $email = $_POST['email'];
	   $lpwd = $_POST['lpwd'];
	   $password = $_POST['password'];
	   $con = mysqli_connect("localhost","root","","onlinetest");
	   $res = mysqli_query($con,"SELECT * FROM `admin` ");
	   $row = mysqli_fetch_array($res);
	   echo $row['Password'];
	   if($lpwd == $row['Password'])
	   {
		   $update = mysqli_query($con,"UPDATE `admin` SET `Password`='$password' WHERE `Email` = '$email'");
			if($update == true)
			{
				echo "<script>alert('Your Password is Change Successfully!!!');window.location='index.php'</script>";
			}
			else
			{
				echo "<script>alert('Problem in changing Password!!!')</script>";
			}
	   }
   }
?>

