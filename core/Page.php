<?php class Page {
	static $db;

	protected $jsIncludes = array();
	protected $styleIncludes = array();

	function __construct(){
		$this->init();
	}
	function init(){
		
	}
	function renderBody(){ }

	protected function renderPage(){ ?>
		<!doctype HTML>
		<html lang="hu">
		<head>
			<meta charset="UTF-8">
			<title>Tami es Gergo eskuvo</title>
			<?php $this->addIncludes();	?>
		</head>
		<body>
			<?php $this->renderBody();	?>
		</body>
		</html>
	<?php }


	function addIncludes(){
		?>
			<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<?php
		foreach($this->jsIncludes as $js){ ?>
			<script src="/js/<?php echo $js; ?>" ></script>
		<?php }
		
		foreach($this->styleIncludes as $style){ ?>
			<link rel="stylesheet" href="/css/<?php echo $style; ?>"></link>
		<?php }

	}
	static function render($class){
		if(!class_exists($class)) require_once($class.'.php');
		$page = new $class();
		$page->renderPage();
		die();
	}
}
