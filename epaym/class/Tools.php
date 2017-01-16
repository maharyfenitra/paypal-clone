<?php 

class Tools{


	public static function gkey($chaine){
		global $key;
		$res = md5($chaine.$key);
		return $res;

	}
	public static function cond(){
		if(!isset($_SESSION["customer_id"])){
			header("location:home.php");
		}
	}
	public static function check($table,$col,$val){
		
	}
}

?>
