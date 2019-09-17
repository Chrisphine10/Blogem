<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
} else {

    ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Login</title>
</head>
<body>
	<div class="floater">
		<button
			style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); outline: none; margin: 30px; padding: 10px; border: none; border-radius: 3px; background-color: #ff7e57">
			SEE THE FEEDS</button>
	</div>
	<div class="login">
		<p>Log In</p>

		<form action="#" name="loginform" method="get">
			<input type="email" name="email" required
				placeholder="Enter your login email..." id="email"><br> <input
				type="password" name="password" placeholder="Enter your password..."
				pattern=".{8,}" required title="Less charactors for password"
				id="password"><br>
				<?php
    if (isset($_GET['submit'])) {

        include '../database/config.php';
        $logEmail = $_GET["email"];
        $logPassword = $_GET["password"];
        $real_pass = null;
        $conn = new Conn();
        $sql = "SELECT user_password FROM userdetails WHERE user_email ='" . $logEmail . "'";
        $result = $conn->connector()->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $real_pass = $row["user_password"];
            }
        } else {
            echo "<p style='color: red;'>User account not found</p>";
        }
        if ($real_pass == $logPassword) {
            $_SESSION['user'] = true;
            $_SESSION['useremail'] = $logEmail;
            $_SESSION['loggedin'] = md5(microtime() . rand());
            header('Location: ../createblog.php');
        } else {
            echo "<p style='color: red;'>invalid password</p>";
        }

        $conn->connector()->close();
    }
    ?>
				<input type="submit" name="submit">
		</form>
		<div class="footer">
			<div class="signup">
				Don't have an account? <a href="register.php">Sign Up</a>
			</div>
			<div class="forget">
				<a href="#">Forgot your password?</a>
			</div>
		</div>

	</div>
</body>
</html>
<?php
}
?>