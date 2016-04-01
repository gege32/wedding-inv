<?php class ParticipantAction {
	static function check(){
		$used = Page::$db->getValue("SELECT free FROM codes WHERE code = ".Page::$db->escapeValue($_POST['code']));
		if($used == 1){
			$_SESSION['participant'] = $_POST['code'];
			echo "OK";
			die();
		}else {
			echo "DENIED";
			die(503);
		}
	}
}
?>
