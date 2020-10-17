<?php
error_reporting(0);
if(!$_SESSION['email'] && $_SESSION['password'])
{
echo "<script>alert('Please login to continue.');window.location='/Projects/OnlineExaminationSystem/Login.php';</script>";	
}
$email=$_SESSION['email'];
$pwd=$_SESSION['password'];

?>
<?php
include('AdminHeader.php');
?>
<div class="row">
	<div class="col-sm-2">
		<img src="images/admin.jpg" style="padding-left:400px" height="600px"><br>
	</div>
</div>
</body>
</html>