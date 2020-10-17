    <!-- banner -->
    <div class="banner">
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
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="index.php"  data-toggle="modal" data-target="#myModal">Signin</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="index.php"  data-toggle="modal" data-target="#ResultModal">Result</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="index.php"  data-toggle="modal" data-target="#DevModal">Developer</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="Feedback.php">Feedback</a>
								</li>
					</ul>
				</div>
			</nav>
						<!--Login Modal-->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
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
			<input type="submit" name="login" value="Login" class="btn btn-success col-sm-3 col-sm-6 col-sm-12">
		</form>
		<a href="changepwd.php" style="text-decoration:none; float:left;color">Change Password?</a>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
			<!--Result Modal-->

<div class="modal" id="ResultModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Result</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		<form method="post" >
			<div class="input-group mb-3">
				<div class="input-group-append">
				<span class="input-group-text">Email</span>
				</div>
				<input type="email" name="email" class="form-control"required>
			</div>
			<input type="submit" name="result" value="View Result" class="btn btn-success col-sm-3 col-sm-6 col-sm-12">
		</form>
		<?php
		if(isset($_POST['result']))
		{
			$email = $_POST['email'];
			$_SESSION['email'] = $email;
			echo "<script>window.location='Result.php'</script>";
		}
		
		?>
		</table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


			<!--Developer Modal-->

			<!-- The Modal -->
<div class="modal" id="DevModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Developer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		<div class="row">
			<div class="col-sm-5">
				<img src="images/anshu.jpg" height="200px" width="150px" class="rounded">
			</div>
			<div class="col-sm-5">
				<p>
				<h6>Anshu Sharma</h6>
				<h6>anshusharma1298@gmail.com</h6>
				<h6>7007976332</h6>
				<h6>Shri Ramswaroop Memorial University </h6>
				</p>
			</div>
		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!--End of the Developer Modal-->
