<!DOCTYPE html>
<html>
<head>
	<title>Regestration Form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="shortcut icon" href="./Favicon.png" type="image/png+xml">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Gruppo&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<style type="text/css">
		body
		{
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./assets/images/lgbg.jpeg');
			background-size: cover;
			margin-top: 300px;
			text-align: center;
			font-size: 50px;
			font-family: "Exo", sans-serif;
		}
		.btn-field button
            {
                  padding: 12px;
                  width: 120px;
                  background: #FFB6C1;
                  color: #000;
                  border: none;
                  border-radius: 5px;
                  cursor: pointer;
                  font-size: 17px;
                  font-weight: 700;
            }
            .btn-field button a  
            {
            	text-decoration: none;
            	color: black;
            	font-size: 19px;
            }
	</style>
</head>
<body >
<?php
		$con=mysqli_connect("localhost","root","","skinlab");
		if(!$con) 
		{
			print("not connected");
		}
		$nm=$_REQUEST['nm'];
		$sn=$_REQUEST['sn'];
		$em=$_REQUEST['em'];
		$ps=$_REQUEST['ps'];
		$ph=$_REQUEST['ph'];
		$dob=$_REQUEST['dob'];
		$count=mysqli_query($con,"insert into data values ('$nm','$sn','$em','$ps','$ph','$dob')");
		if($count>=1)
		{
			print("Regestration Successful !");
			
		}
		else
		{
			print("plz enter data");
		}
		mysqli_close($con);
?>
	
	<div class="btn-field">
	     <button type="button"><a href="login1.php">Logout</a></button>
    </div>
	

</body>
</html>