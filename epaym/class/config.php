<?php 
global $dbname;
global $servername;
global $username;
global $password;
global $connection;
$dbname = "test";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";



?>
