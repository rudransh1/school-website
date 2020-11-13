<?php 
include('connection.php');
session_start();
 ?>
<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<?php require("header.php"); ?>
<style>
body {
  background-color: #329998;
}
</style>
<body>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
<h2>Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4" style="color:#fff">Enter YOur Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control" style="background-color:#fff"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4" style="color:#fff">Enter YOur Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control" style="background-color:#fff"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		
		</div>
	</div>
</form>	
</div>
</div>
</div>
</body>
</br>
</br>
</br>
<?php require("footer2.php"); ?>