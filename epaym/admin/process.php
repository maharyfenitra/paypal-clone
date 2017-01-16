<?php 
//php storm
include "config/config.php";
	if(!isset($_SESSION["admin_id"])){
		header("location:connection.php");	
	}
	if(isset($_GET["signout"])){
	session_unset();
	header("location:index.php");
	}
	if(isset($_POST["action_id"])){
		if($_POST["action_id"]==1){
			$ad=Admin::getAdmin(null,$_POST["name"],$_POST["password"]);
			if($ad){
			
			
			$_SESSION["admin_id"] = $ad->getId();
			header("location:home.php");
			}else{
			
			header("location:connection.php");
			}
		}
		if($_POST["action_id"]==2){
		$ad->deposit($_POST["pseudo"],$_POST["amount"]);
		header("location:home.php");
		}
		if($_POST["action_id"]==3){
		$ad->withdrawal($_POST["pseudo"],$_POST["amount"]);
		header("location:home.php");
		}
	

	}
	
	

?>
