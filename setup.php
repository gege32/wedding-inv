<?php
session_start();

//Global variables
$PAGE_REQUEST = explode('?', str_replace('/', '', $_SERVER['REQUEST_URI']))[0];
$SERVER_DATA = array();

//includes
require_once('core/DB.php');
require_once('core/Page.php');
require_once('core/Validator.php');
require_once('entities/setupEntities.php');
require_once('layout/BaseLayout.php');

//initialization
Page::$db = new DB('localhost', 'eskuvo', 'eskuvo', 'uHdXFm6sCcf4SWu4');
//User::init();
