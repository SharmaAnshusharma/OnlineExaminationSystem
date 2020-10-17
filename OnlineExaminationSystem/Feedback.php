
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Online Examination System</title>
    <?php
		include('bootstrapFiles.php');
	?>
</head>
<body>
<?php
include('navigation.php');
?>	  
<br><br><br><br><br>
   

                    <div class="col-md-6 main_grid_contact m-auto d-block">
                        <div class="form">
                            <h4 class="mb-4 text-left">Give Feedback</h4>
                            <form method="post">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="example@gmail.com" required="">
                                </div>
								<div class="form-group">
                                    <label>Contact</label>
                                    <input class="form-control" type="tel" name="Contact" placeholder="+91 **********" required="">
                                </div>
                                <div class="form-group">
                                    <label>Feedback</label>
                                    <textarea name ="msg" id="textarea" placeholder="Write Feedback Here!"></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" name="feedback" value="Send Feedback">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
	if(isset($_POST['feedback']))
	{
		extract($_POST);
		$con = mysqli_connect("localhost","root","","onlinetest");
		$insert = mysqli_query($con,"INSERT INTO `contact`(`Name`, `Email`, `Contact`, `Message`) VALUES ('$Name','$Email','$Contact','$msg')");
		if($insert == true)
		{
			echo "<script>alert('Your Feedback Submitted Successfully!!');window.location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Not Inserted !!');</script>";
		}
	}	
	?>
	
	
    <!-- //contact -->
<!--/newsletter-->
<?php
include('footer.php');
?>