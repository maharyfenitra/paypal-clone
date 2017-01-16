<?php 
include "config/config.php";


if(!isset($_SESSION["admin_id"])){
header("location:connection.php");	
}
else{
header("location:home.php");
}

?>
