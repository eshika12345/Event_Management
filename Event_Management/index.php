<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
<h1>Event Management Website</h1>
    <h1>Register</h1>
    <form method="post" action="regitration_process.php">
<div class="label">
<label>Your full name :</label>
<br>
<input type="text" name="fname">
</div>
<div class="label">
<label>Your mobile number :</label>
<br>
<input type="text" name="number">
</div>
<div class="label">
<label>Email :</label>
<br>
<input type="text" name="email">
</div>
<div class="label">
<label>Username :</label>
<br>
<input type="text" name="uname">
</div>
<div class="label">
<label>Password :</label>
<br>
<input type="password" name="pass" placeholder="at least 5 characters">
</div>
<div class="label">
<input type="submit" name="submit" value="Submit">
</div>
</form>
<div>
    Already have an account?<a href="login.php">Login</a>
</div>
</div>
</body>
</html>