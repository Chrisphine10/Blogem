<?php
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['subject'];
include '../database/config.php';

$connection = new Conn();
$connection->connector();
$sql = "INSERT INTO contactus (name, email, country, subject) VALUE ('$name','$email','$country','$message')";
if ($connection->connector()->query($sql) === true) {

} else {
    echo "fail";
}
$connection->connector()->close();
?>
