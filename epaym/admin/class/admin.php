<?php 

class Admin{
private $id;
private $name;
private $password;
private $order;


private function __construct($id,$name = false){

		$res = DB::select(PREFIX."admin",array("*")," name = '$name'|| id = '$id'")[0];
		$this->id = $res["id"];
		$this->name = $res["name"];
		$this->password = $res["password"];
		$this->order = $res["order"];

	}
public static function getAdmin($id,$name,$password){
		$ad = new Admin($id,$name);
		if($password==$ad->getPassword()){
			return $ad;
		}
		else{
			return false;
		}
	}
public static function getAdminById($id){
		$ad = new Admin($id);
		return $ad;
	}
public function getId(){
		return $this->id;
}
public function getPassword(){
		return $this->password;
}
public function deposit($pseudo,$amount){

	$c=Customer::getCustomerByPseudo($pseudo);
	$a=Customer::getCustomerByPseudo("admin");
	Transaction::sendMoney($a,$c,$amount);
	}
public function withdrawal($pseudo,$amount){
	$c=Customer::getCustomerByPseudo($pseudo);
	$a=Customer::getCustomerByPseudo("admin");
	Transaction::sendMoney($c,$a,$amount);
    	}
}

?>
