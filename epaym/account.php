<?php 

include "config/config.php";
Tools::cond();

	include "php_include/header_a.php";
	if(!isset($_GET["view"])){
		$content = "details_account.php";
		include "php_include/".$content;
		//include "php_include/history.php";

	}
	else{


		$view = $_GET["view"];
		switch ($view) {
		case 'send' :
		$content = "send.php";
		break;
		
		case 'history' :
		if(isset($_GET["page"])){
		$hs =  $customer->getHistories($_GET["page"]);
		}else{
		$hs =  $customer->getHistories();
		}
		
		$nb = $customer->getNbpHistories();
		$content = "history.php";
		break;

		default :
		$content = "details_account.php";
		}
		include "php_include/".$content;
	}
	
	include "php_include/footer_a.php";
?>
