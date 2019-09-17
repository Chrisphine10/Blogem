<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] && isset($_SESSION['user']) && isset($_SESSION['useremail'])) {
}
else {
    header("Location: auth/login.php");
}
?>