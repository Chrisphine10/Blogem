<?php
class Conn {
    function connector() {
        $servername = "127.0.0.1:3306";
        $username = "pheene";
        $password = "Passw0rd";
        $dbname = "blogem";
        
        $connection = new mysqli($servername, $username, $password, $dbname);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        else 
            return $connection;
    }
}
?>
