<?php
include('connection.php');
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];

$sql="select * from registration_tbl where Username='$uname' and Password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
session_start();
$_SESSION['username']=$uname;
//echo $_SESSION['username'];
header("Location:loginsuccess.php");
}
else
{
echo 'Login failed, invalid username or password';
}
}
?>