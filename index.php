<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
<title>Blogem.net - Shout loud your opinion. Setting free the
	information.</title>
</head>
<body>

	<div class="page-1">

		<div>

			<div class="signin" id="signin">
			<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    ?>
			<div id="hidden">
					<a href="session/logoutsession.php">Log Out</a>
			<?php
} else {
    ?> 
			<a href="auth/login.php">Log In</a> <a href="auth/register.php">Register</a>
			    <?php
}
?>
			</div>
			</div> <div class="floater" >
					<button style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); outline: none; margin: 30px; padding: 10px; border: none; border-radius: 3px; background-color: #ff7e57">
					<strong>SEE THE FEEDS</strong></button>
					</div>
			<div class="title">
				<h1>Welcome to Blog'em</h1>
				<p>Shout loud your opinion!</p>
				<form action="createblog.php">
					<button class="btnCreate">Create a Blog</button>
					<br>
				</form>
				<br>
			</div>
		</div>
	</div>
	<div class="page-2">
	<?php require('others/topblogs.php'); ?>
	</div>
	<div class="page-3">
		<div class="terms">
	<?php require('others/termsandconditions.php'); ?>
	</div>
		<div class="privacy">
	<?php require('others/privacypolicy.php'); ?>
	</div>
	</div>
	<div class="bottom">
		<div class="footer">
			<div class="contactus">
    		<?php require('others/contactus.php'); ?>
    	   </div>
		</div>
		<div class="aboutus">
				<ul>
				<li>About Us</li>
				<li>Terms and Conditions</li>
				<li>Privacy Policy</li>
				<li>Top Posts</li>
				</ul>
			</div>
	</div>
</body>
</html>