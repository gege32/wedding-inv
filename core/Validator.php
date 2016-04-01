<?php class Validator {
	static function required($input){ return trim($input?true:false); }
	static function typeString($input){ return is_string($input); }
	static function typeFloat($input){ return is_float($input); }
	static function typeInt($input){ return is_int($input); }
	static function stringLength($input, $min=1, $max = 255){
		$count = count_chars($input);
		return $count > $min && $count < $max;
	}
}