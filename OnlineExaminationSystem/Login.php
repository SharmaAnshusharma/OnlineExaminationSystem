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
									<a class="nav-link" href="Login.php">Login </a>
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
	<center><h2>Admin Login </h2></center>
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
					<span class="input-group-text">Password</span>
					</div>
					<input type="password" name="password" class="form-control"required>
				</div>
				<input type="submit" name="signin" value="Login" class="btn btn-success col-sm-3 col-sm-6 col-sm-12">
			</form>
			<a href="change.php" style="text-decoration:none; float:left;color">Change Password?</a>
		</div>
	</div>
</div>


	<?php
   
   if(isset($_POST['signin']))
   {
      // username and password sent from form 
      $db=mysqli_connect("localhost","root","","onlinetest");
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  
	  $_SESSION['email'] = $myusername;
	  $_SESSION['password'] =$mypassword;
      
      
	  $sql = "SELECT * FROM `admin` WHERE `Email` = '$myusername' and `Password` = '$mypassword' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
        echo "<script>window.location='Admin/index.php'</script>";
      }
	  else 
	  {
         echo "<script>alert('Your Email or Password is invalid or You are not Registered')</script>";
      }
   }
?>

