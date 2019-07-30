<?php include('usercreate.php') ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">

<title>Registration</title>
</head>
<body>
<div class="login">
<p>Sign Up</p>
	<form method="post" action="usercreate.php">
			<input type="text" placeholder="Enter your first name..." required name="fname"><br>
			<input type="text" placeholder="Enter your last name..." required name="lname"><br>
			<input type="radio" required name="gender" value="male"> Male<br>
			<input type="radio" required name="gender" value="female"> Female<br>
			<input type="email" placeholder="Enter your email address..." name="email"><br>
			<input type="password" placeholder="Enter your password..." required name="password"><br>
			<input type="password" placeholder="Re-enter your password..." required name="conpassword"><br>
			<input
			type="submit" name="submit"><br>
	</form>
	</div>
</body>
</html>