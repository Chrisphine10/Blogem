<?php
include 'session/sessioncheck.php';
?>
<html>
<head>
<title>Create Blog</title>
<link rel="stylesheet" type="text/css" href="/css/creator.css">
</head>
<body>
<div>
<h2 style="margin-left: 50px;">Select Your View of Choice:</h2>
	<div class="flexer">
		<div class="rowdefault"> <div><p>Default Style</p></div>
			<a href="views/defaultview.php"><img alt="fast-touch"
				src="images/fast.jpg"></a>
		</div>
		<div class="rowbasic"> <div><p>Basic Style</p></div>
			<a href="views/basic.php"><img alt="basic" src="images/basic.jpg"></a>
		</div>
		<div class="rowstandard"> <div><p>Standard Style</p></div>
			<a href="views/standard.php"><img alt="standard"
				src="images/standard.jpg"></a>
		</div>
		<div class="rowadvance"> <div><p>Advanced Style</p></div>
			<a href="views/advanced.php"><img alt="advanced"
				src="images/advance.jpg"></a>
		</div>

</div>
	</div>
</body>
</html>