<?php 

global $dbname;
global $servername;
global $username;
global $password;
global $connection;
global $key ;
session_start();
$key = "kjdiijiumpzoddncchh09à__=";
$dbname = "epaym";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully";
define('PREFIX', 'e_');


include "class/db.php";
include "class/customer.php";
include "class/transaction.php";
include "class/Tools.php";

if(isset($_SESSION["customer_id"])){

	$customer = Customer::getCustomerById($_SESSION["customer_id"]);
}


?>
