<?php class Participant {
	private $data = array();
	private $keys = array('name', 'code', 'phone', 'email');
	
	function save(){
		return Page::$db->insert('participant', $data);
	}
	
	function __get($key){
		if(in_array($key, $keys))
			return $data[$key];
		return null;
	}
	
	function __set($key, $value){
		if(in_array($key, $keys))
			$data[$key] = $value;
	}
}
?>
