<?php class BaseLayout extends Page{

	function init(){
		$this->jsIncludes[] = 'jquery.js';
		$this->jsIncludes[] = 'json2.js';
		$this->jsIncludes[] = 'site.js';
		
		$this->styleIncludes[] = 'main.css';
		$this->styleIncludes[] = 'extra.css';
		$this->styleIncludes[] = 'dropdown.css';
		$this->styleIncludes[] = 'lightbox.css';
		
	}

	function renderBody(){ ?>
		<div class="page-wrapper"> 
		<?php $this->header(); ?>
		<?php $this->content(); ?> </div>
	<?php }

	function content(){}
	function header(){}
	function footer(){}
} 
