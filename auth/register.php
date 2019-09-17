<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Sign Up</title>
</head>
<body>
<div class="floater" >
					<button style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); outline: none; margin: 30px; padding: 10px; border: none; border-radius: 3px; background-color: #ff7e57">
					SEE THE FEEDS</button>
					</div>
	<div class="login">
		<p>Create a new account</p>

		<form action="#" name="loginform" id="loginform"
			method="get">
			<input type="text" required="required" name="text" placeholder="Enter your full name..."
				id="name"> <select required="required" name="loginform">
				<option value="">--Select Gender--</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select><br> <input type="email" name="email" required
				placeholder="Enter your login email..." id="email"><br> <input
				type="password" name="password" placeholder="Enter your password..."
				pattern=".{8,}" required title="Less charactors for password" id="password"><br> <input type="password" name="cpassword"
				placeholder="Confirm your password..." pattern=".{8,}" required title="Less charactors for password" id="cpassword"><br>
			     <?php
        include '../database/config.php';
        $conn = new Conn();

        if ($conn->connector()->connect_error) {
            die("Connection failed: " . $conn->connector()->connect_error);
        }
        if (isset($_GET['submit'])) {
            $email = $_GET["email"];
            $sqltest = "SELECT * FROM userdetails WHERE user_email ='" . $email . "'";
            $resultest = $conn->connector()->query($sqltest);
            if ($resultest->num_rows > 0) {
                echo "Email already registered to another user";
            } elseif ($_GET['password'] != $_GET['password']) {
                echo "<p style='color: red;'>Different passwords entered.</p>";
            } else {
                $_GET["email"];
                $name = $_GET["name"];
                $userpassword = $_GET["password"];
                $gender = $_GET["gender"];
                $sql = "INSERT INTO Userdetails
(user_name, user_email, user_password, user_gender)
VALUES ('$name','$email','$userpassword','$gender')";

                if ($conn->connector()->query($sql) === TRUE) {
                    header('Location: login.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->connector()->error;
                }

                $conn->connector()->close();
            }
        }

        ?><br><input type="checkbox" value="Accept" required>I have read and agree
			to the <a href="../others/termsandconditions.php"> terms and
				conditions</a><br>
				<input type="submit" name="submit">
		</form>
		<div class="footer">
			<div class="signup">
				Have an account? <a href="login.php">Log In</a>
			</div>
		</div>

	</div>
</body>
</html>