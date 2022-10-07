<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
include("connection.php");
?>
<h1>Login</h1>
<form method="post" action="loginprocess.php">
<div class="container">
<label>Username :</label>
<br>
<input type="text" name="uname" placeholder="Enter Username">
<br>
<label>Password :</label>
<br>
<input type="password" name="password" placeholder="Enter password">
<br>
<input type="submit" name="submit" value="Sign-in">
</div>
</form>
</body>
</html>