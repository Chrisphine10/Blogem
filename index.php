<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript">
$("li a").click(function(){
    $('html, body').stop.animate({
        scrollTop: $( $.attr(this, 'here') ).offset().top
    }, 1000);
    return false;
}); 
</script>
<title>Blogem.net - Shout loud your opinion. Setting free the
	information.</title>
</head>
<body>

	<div class="page-1">

		<div>
	
			<div class="signin" id="signin">
			<div id="hidden">
			<a href="login.php">Log In</a> <a href="register.php">Register</a>
			</div>
			<?php
			echo "<script >
			 window.onload = function() {
             document.getElementById('logout').style.display = 'none';
             };
			    </script>";
			?>
				<a href="logoutsession.php" id="logout">Log Out</a>
			</div>
			<div class="title">
			<?php
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
			   echo "<script type=\"text/javascript\">
                   $(document).ready(function() {
                    promptLogin();
                    });
			        </script>";
			   echo "<script>
			 window.onload = function() {
             document.getElementById('hidden').style.display = 'none';
             };
			    </script>";
			}
            ?>
				<h1>Welcome to the Blogem'</h1>
				<p>Shout loud your opinion!</p>
				<form action="createblog.php">
					<button class="btnCreate">Create a Blog</button>
				</form>
				<br>
			</div>
		</div>
	</div>
	<div class="page-2">
	<?php require('topblogs.php'); ?>
	</div>
	<div class="page-3">
		<div class="terms">
	<?php require('termsandconditions.php'); ?>
	</div>
		<div class="privacy">
	<?php require('privacypolicy.php'); ?>
	</div>
	</div>
	<div class="bottom">
		<div class="contactus">
    		<?php require('contactus.php'); ?>
    	</div>
		<div class="footer">
			<ul>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="work.php">Work with us</a></li>
				<li><a href="termsandconditions.php">Terms and conditions</a></li>
				<li><a href="privacypolicy.php">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</body>
</html>