<?php 
define("someUnguessableValue", "anotherUnguessableValue");
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    header ("Location: blogcreator.php");
}
else {
    header("Location: login.php");
}
?>