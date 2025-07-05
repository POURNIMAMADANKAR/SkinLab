<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","skinlab");
	if(!$con)
	{
		print("not connected");

	}
	
	$nm=$_REQUEST['nm'];
	$ps=$_REQUEST['ps'];
	$rs=mysqli_query($con,"select * from data where  name='$nm' and password='$ps'");
	if(mysqli_num_rows($rs)>=1)
	{
		$_SESSION['un']=$nm;
		include('homepage2.php');
	}
	else
	{
		print(" plz register");
		include('reg1.php');
	}
	mysqli_close($con);
?>

</body>
</html>