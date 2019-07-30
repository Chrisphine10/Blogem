<?php
//Using MYSQLi connection
$servername = "127.0.0.1:3306";
$username = "pheene";
$password = "Passw0rd";
$dbname = "blogem";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

//log in details from user
$logEmail = $_POST["email"];
$logPassword = $_POST["password"];
echo $logEmail;
echo $logPassword;

//get data from database
$sql = "SELECT user_password FROM Userdetails WHERE user_email ='" . $logEmail."'";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $real_pass = $row["user_password"];
    }
} else {
    echo "error locating row";
}
if($real_pass == $logPassword){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['useremail'] = $logEmail;
    echo "successfull login";
    header('Location: index.php');
}
else {
    echo "invalid password";
}

$connection->close();

?>