<?php
session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <?php
		include('bootstrapFiles.php');
	?>
</head>

<body>
<?php
include('navigation.php');

?>
        </header>
        <!-- //header -->
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info">
                    <h3>What would <span>you like </span> to Do!?</h3>
					
				</div>
            </div>
        </div>
    </div>
	 <!-- //banner-text -->
	 <!--banner form-->
	<section class="banner_form py-5">
		<div class="container py-lg-3">
			<div class="row ban_form">
				<div class="col-lg-8 bg-white fom-left">
					<div class="categories_sub cats1">
						<h2 class="heading-agileinfo">Welcome To <span> Tests </span></h2>
						<p class="vam">Online examination is conducting a test online to measure the knowledge of the participants on a given topic. In the olden days, everybody had to gather in a classroom at the same time to take an exam. </p></div>
				</div>
				<div class="col-lg-4 reg-fom">
					<h4 class="text-white text-center">Sign Up</h4>
						<form method="post">
							<div class="reg-fom-btm mt-5">
								<div class="fields">
									<input type="text" name="name"  placeholder="Name" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<input type="text" name="college"  placeholder="College" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<input type="text" name="contact"  placeholder="Contact" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<input type="text" name="email" placeholder="Email" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<input type="password" name="pwd"  placeholder="password" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<div class="fields">
									<input type="password" name="cpwd"  placeholder="Confirm Password" class="form-control"required>
								</div>
							</div>
							<div class="reg-fom-btm mt-3">
								<input type="submit" name="signup" value="Signup">
							</div>
						</form>
						<?php
						if(isset($_POST['signup']))
						{
							extract($_POST);
							$con = mysqli_connect("localhost","root","","onlinetest");
							$sqlquery = "SELECT 1 FROM `user` WHERE email = '$email'";
							$select_result = mysqli_query($con,$sqlquery);
							if(mysqli_num_rows($select_result)>0)
							{
							echo "<script>alert('Email is already Exists')</script>";
							}
							else if($pwd != $cpwd)
							{
							echo "<script>alert('Password are not match')</script>";
							}
							else
							{
							
							$insert = mysqli_query($con,"INSERT INTO `user`(`Name`, `College`, `Contact`, `Email`, `Confirm`) VALUES ('$name','$college','$contact','$email','$cpwd')");
							if($insert == true)
								{
									echo "<script>alert('Signup Successfully!!');</script>";
								}
								else
								{
									echo "<script>alert('Not Inserted !!');</script>";
								}
							}
						}
						?>

						
				</div>
			</div>
		</div>
	</section>
	<!--//banner form-->
	  <!-- /services -->
	<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
               <h3 class="heading-agileinfo text-center">What <span> We do</span></h3>
                <div class="row middle-grids mt-md-5 pt-4">
			  <?php
				$con = mysqli_connect("localhost","root","","onlinetest");
				$res = mysqli_query($con,"SELECT * FROM `test`");
				while($row =mysqli_fetch_array($res))
				{
				?>
                    <div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body mb-2">
                                <i class="fas fa-graduation-cap mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">
                                  <?php echo $row['Test Heading'];?></h5>
                                <p class="card-text"><?php echo $row['Test Description'];?>
                                </p>
                            </div>
                        </div>
                    </div>
				<?php
				}
				?>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
<!-- choose -->
	<section class="choose py-5">
		<div class="container py-md-4 mt-md-3"> 
			<div class="row inner_w3l_agile_grids-1 ">
				<div class="col-lg-6 w3layouts_choose_left_grid1">
					<div class="choose_top">
						<h4 class="mb-3 mt-3 text-white">Build Your Career with us </h4>
						<p class="text-white">With online examination students can do the exam online, in their own time, with their own device, regardless of where they live. You only need a browser and an internet connection. </p>
						
					</div>
				</div>
				<div class="col-lg-6 w3layouts_choose_left_grid2">
					<div class="row">
						<div class="col-md-6 w3l_choose_bottom1 mt-3 pt-md-4">
							<div class="choose_bottom_top">
                                <i class="fas fa-globe mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">General Tests</h5>
                                <p class="card-text">Aptitude, Reasoning and English etc.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom3 mt-3 pt-md-4">
							<div class="choose_bottom_top">
                                <i class="fas fa-graduation-cap mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Programming Tests</h5>
                                <p class="card-text">C, C++, Java, PHP and Python etc.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom4">
							<div class="choose_bottom_top">
                                <i class="fas fa-globe mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Technical Tests</h5>
                                <p class="card-text">Computer Networks, Database etc.
                                </p>
                            </div>
						</div>
					</div>
				</div>
			</div>
	</div>   
</section>
<!-- //choose -->
	<!-- stats -->
	<section class="stats py-5">
		<div class="container py-md-5">
			<h3 class="heading-agileinfo text-center">Our  <span>Achievements</span></h3>
			<span class="w3-line black"></span>	
			<div class="row inner_w3l_agile_grids-1 pt-md-5 mt-4">
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
					<i class="fas fa-trophy mb-2"></i>
					<p class="counter">2010</p>
					<h3>Year of Foundation</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
					<i class="fas fa-graduation-cap mb-2"></i>
					<p class="counter">765</p>
					<h3>Qualified</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<i class="fas fa-user mb-2"></i>
					<p class="counter">125</p>
					<h3>Selected Candidate</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<i class="fas fa-users mb-2"></i>
					<p class="counter">1500</p>
					<h3>Registered Candidate</h3>
				</div>
			</div>
		</div>	
	</section>
<!-- //stats -->
<!--/newsletter-->
<?php

include('footer.php');
?>