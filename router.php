<?php
catchActions();
if(!$PAGE_REQUEST || $PAGE_REQUEST == 'favicon.ico')
	$PAGE_REQUEST = 'Login';
Page::render($PAGE_REQUEST);

//functions
function catchActions(){
	//echo array_key_exists('method', $_POST);
	if(!array_key_exists('method', $_POST)) return;
	$action = explode('/', $_POST['method']);
	require_once($action[0].'Action.php');
	$action[0].='Action';
	$action[0]::$action[1]();
}
