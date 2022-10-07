<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$number=$_POST['number'];
    
	$email=$_POST['email'];
	$uname=$_POST['uname'];
    $pass=$_POST['pass'];
	$insrt="insert into registration_tbl(Name,Number,Email,Username,Password) values('$fname','$number','$email','$uname','$pass')";
	$query=mysqli_query($conn,$insrt);
	if($query)
	{
		echo  "Recorded";
		
	}
	else
	{
		echo "Not Recorded";
	}
}

?>