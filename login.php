<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Login</title>
</head>
<body>
	<div class="login">
		<p>Log In</p>
		<form action="userauth.php" name="loginform" method="post">
			<div class="show">
				<input type="email" name="email"
					placeholder="Enter your login email..." required id="email"><br> <input
					type="password" name="password"
					placeholder="Enter your password..." required id="password"><br> <input
					type="submit">
			</div>
		</form>
		<div class="footer">
			<div class="signup">
				Don't have an account?<a href="register.php">Sign Up</a>
			</div>
			<div class="forget">
				<a href="#">Forgot your password?</a>
			</div>
		</div>

	</div>
</body>
</html>