<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>
<body>
    <?php
    include('connection.php');
session_start();
$uname=$_SESSION['username'];
echo 'Welcome '.$uname;
?>
    You have been successfully logged in !
    <form method="post" action="logout.php">
    <input type="submit" name="submit" value="Logout">
</form>
</body>
</html>