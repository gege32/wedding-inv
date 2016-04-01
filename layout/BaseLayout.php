<?php class BaseLayout extends Page{

	function init(){
		$this->jsIncludes[] = 'jquery.js';
		$this->jsIncludes[] = 'json2.js';
		$this->jsIncludes[] = 'site.js';
		
		$this->styleIncludes[] = 'main.css';
		$this->styleIncludes[] = 'extra.css';
		$this->styleIncludes[] = 'dropdown.css';
		
	}

	function renderBody(){ ?>
		<header> <?php $this->header(); ?> </header>
		<div class="content"> <?php $this->content(); ?> </div>
	<?php }

	function content(){}
	function header(){}
	function footer(){}
} 
