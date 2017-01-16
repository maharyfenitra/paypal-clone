<?php 

class Customer{
private $id;
private $pseudo;
private $mail;
private $last_name;
private $first_name;
private $password;
private $amount;


	private function __construct($id,$mail = false,$pseudo = false){
		$res = DB::select(PREFIX."customer",array("*"),"id = '$id' || pseudo = '$pseudo' || mail = '$mail'")[0];
		$this->id = $res["id"];
		$this->pseudo = $res["pseudo"];
		$this->mail = $res["mail"];
		$this->last_name = $res["last_name"];
		$this->first_name = $res["first_name"];
		$this->password = $res["password"];
		$this->amount = $res["amount"];

	}
	public static function getCustomer($id,$password = false, $mail = false,$pseudo = false){
		$c = new Customer($id,$mail,$pseudo);
		if(Tools::gkey($password)==$c->getPassword()){
			return $c;
		}
		else{
			return false;
		}
	}
	public static function getCustomerById($id){
		return new Customer($id);
	}
	public static function getCustomerByPseudo($pseudo){
		return new Customer(null,null,$pseudo);
	}
	public static function newCustomer($mail,$pseudo, $password ,$last_name = false,$first_name = false ){
		$p = Tools::gkey($password);
		DB::insert(PREFIX."customer",array("mail","pseudo","password","last_name","first_name"),array($mail,$pseudo,$p,$last_name,$first_name));
	}
	public static function checkUser($mail,$pseudo){
		$res = DB::select(PREFIX."customer",array("*"),"mail='$mail'||pseudo='$pseudo'")[0];
		if($mail==$res["mail"]&&$pseudo==$res["pseudo"]){
			return 1;
		}
		if($mail==$res["mail"]){
			return 2;
		}
		if($pseudo==$res["pseudo"]){
			return 3;
		}
		return -1;
	
	}
	public function getHistories($page = false){
	
		if(!$page){
			$page = 0;
		}
		$sql = "select customer_id_1, transaction_id, amount, nature  , tr.date  from ".PREFIX."detail_transaction d, ".PREFIX."transaction tr where d.customer_id='".$this->id."' && tr.id = d.transaction_id order by tr.date desc limit 10 offset $page";
		return DB::qs($sql);
	}
	public function getNbpHistories(){
		$sql = "select customer_id_1, transaction_id, amount, nature  , tr.date  from ".PREFIX."detail_transaction d, ".PREFIX."transaction tr where d.customer_id='".$this->id."' && tr.id = d.transaction_id order by tr.date desc";
		$n =count(DB::qs($sql));
		if($n%10==0){
			return ($n-$n%10)/10;
		}else{
			return (($n-$n%10)/10+1);
		}
		
	}
	public function getId(){
		return $this->id;
	}
	public function getPseudo(){
		return $this->pseudo;
	}
	public function getMail(){
		return $this->mail;
	}
	public function getLast_name(){
		return $this->last_name;
	}
	public function getFirst_name(){
		return $this->first_name;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getAmount(){
		return $this->amount;
	}
	public function updatePassword($password){
		$this->password = Tools::gkey($password);
		DB::update(PREFIX."customer",array("password"),array($this->password),"id='".$this->id."'");
	}
	public function updateAmount($amount){
		$this->amount = $amount;
		DB::update(PREFIX."customer",array("amount"),array($amount),"id='".$this->id."'");
	}
}















































?>
