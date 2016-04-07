<?php class ParticipantAction {
	static function check(){
		$used = Page::$db->getRow("SELECT * FROM codes WHERE code = ".Page::$db->escapeValue($_POST['code']));
		if($used["free"] == 1){
			$_SESSION['participant'] = $_POST['code'];
			$used["free"] = 2;
			Page::$db->update("codes", $used, "code =".$used["code"] );
			echo "OK";
			die();
		}else if($used["free"] == 2){
			$_SESSION['participant'] = $_POST['code'];
			echo "USED";
			die();
		}else {
			echo "DENIED";
			die();
		}
	}
	
	static function submit(){
		
		Page::$db->delete("participant", "invid = ".$_SESSION['participant']);
		
		$datatoinsert = array();
		$datatoinsert["invid"] = $_SESSION['participant'];
		$datatoinsert["name"] = $_POST['name'];
		$datatoinsert["email"] = $_POST['email'];
		$datatoinsert["travel"] = $_POST['travelOption'];
		$datatoinsert["foodreq"] = $_POST['foodSpecialNeeds'];
		$datatoinsert["occupation"] = $_POST['occupationOption'];
		$datatoinsert["song"] = $_POST['song'];
		
		if(Page::$db->insert("participant", $datatoinsert)){
			echo "SUCCESS";
		}		
		else{
			echo "ERROR";
		}
		
		die();
	}
}
?>
