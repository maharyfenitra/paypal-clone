<?php

class Transaction{


	public function __construct(){


	}
	public static function sendMoney($c1,$c2,$amount,$trlabel =""){
		if($amount<=0||$c1->getPseudo()==$c2->getPseudo()){
		return -1;
		}
		if($c1->getAmount()>=$amount||$c1->getPseudo()=="admin"){

			$key = Tools::gkey($c1->getId().time());
			$id_tr=self::newTrasaction($key);
			self::detailTransaction($c1->getId(),$c2->getId(),$id_tr,0,$amount);
			self::detailTransaction($c2->getId(),$c1->getId(),$id_tr,1,$amount);
			$c1->updateAmount($c1->getAmount()-$amount);
			$c2->updateAmount($c2->getAmount()+$amount);
			return 0;

		}
		else{

			return 1;
		}
		

	}
	public static function newTrasaction($key,$trlabel = ""){
		DB::insert(PREFIX."transaction",array("key_t"),array($key));
		return DB::select(PREFIX."transaction",array("id","key_t"),"key_t= '$key'")[0]["id"];
	}
	public static function detailTransaction($id,$id_1,$id_tr,$nature,$amount){

		DB::insert(PREFIX."detail_transaction",array("customer_id","customer_id_1","transaction_id","nature","amount"),array($id,$id_1,$id_tr,$nature,$amount));
	}
}

?>
