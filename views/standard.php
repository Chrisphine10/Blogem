<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] && $_SESSION['user'] && isset($_SESSION['useremail'])) {
    ?>
    <html>
    <head>
    <title>Default View</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <link rel="stylesheet" type="text/css" href="../css/defaultview.css">
     <meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
    </head>
    <body>
    <div class="styleform">
    <form action="#" method="get">
 <br>  <select id="styleFont">
 		  <option style="font-family: Helvetica, sans-serif;" value="Helvetica, sans-serif">Helvetica</option>
          <option style="font-family: Times, Times New Roman, serif;" value="Times, Times New Roman, serif">Times New Roman</option>
          <option style="font-family: Bookman, URW Bookman L, serif;" value="Bookman, URW Bookman L, serif">Bookman</option>
          <option style="font-family: FreeMono, monospace;" value="FreeMono, monospace">FreeMono</option>
          <option style="font-family: Comic Sans MS, Comic Sans, cursive;" value="Comic Sans MS, Comic Sans, cursive">Comic Sans MS</option>
          <option style="font-family: Trebuchet MS, sans-serif;" value="Trebuchet MS, sans-serif">Trebuchet MS</option>
          <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif">Arial</option>
          <option style="font-family: Georgia, serif;" value="Georgia, serif">Georgia</option>
          <option style="font-family: American Typewriter, serif;" value="American Typewriter, serif">American Typewriter</option>
          <option style="font-family: Brush Script MT, Brush Script Std, cursive;" value="Brush Script MT, Brush Script Std, cursive">Brush Script</option>
          <option style="font-family: Snell Roundhand, cursive;" value="Snell Roundhand, cursive">Snell Roundhand</option>
       </select>
 <br>
    <label for="bgcolor21">Background Color</label><br>
    <input type="color" id="bgcolor1" name="bgcolor1"><br>
    <label for="bgcolor2">Second Background Color</label><br>
    <input type="color" id="bgcolor2" name="bgcolor2"><br>
    <select>
    <option value="1.0">Full Opacity</option>
    <option value="0.5">Medium Opacity</option>
    <option value="0.1">Low Opacity</option>
    </select><br>
    <input type="submit" name="submit" value="apply">
    </form>
    
    <div class="signature">
    <p><i>Signature</i></p>
    </div>
    </div>
    </body>
    <style>
    html {
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	background-image: url("../images/bgr1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
body {

display: flex;
}
    </style>
    </html>
    
  <?php  
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        session_unset();
        session_destroy();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
} else {
   require '../session/logoutsession.php';
}
?>