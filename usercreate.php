<?php
// Using MYSQLi connection
$servername = "127.0.0.1:3306";
$username = "pheene";
$password = "Passw0rd";
$dbname = "blogem";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $sqltest = "SELECT * FROM Userdetails WHERE user_email ='" . $email . "'";
    $result = $connection->query($sqltest);
    if ($result->num_rows > 0) {
        echo "Email already registered to another user";
        header('Location: register.php');
    } else {
        $email = $_POST["email"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $userpassword = $_POST["password"];
        $gender = $_POST["gender"];
        $sql = "INSERT INTO Userdetails
(user_fname, user_lname, user_email, user_password, user_gender)
VALUES ('$fname','$lname','$email','$userpassword','$gender')";

        if ($connection->query($sql) === TRUE) {
            header('Location: login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();
    }
}

?>