<?php class Login extends BaseLayout {
	function init(){ parent::init();
	}
	function content(){ ?>
		<div id="main">
			<!-- Banner -->
			<section id="banner">
			   <header>
				  <h2>Üdvözlünk</h2>
				  <p>Kérlek add meg a meghívón található 3 jegyű kódot!</p>
			   </header>
			   <footer>
				<form class="codeCheck" method="POST">
					<input class="" name="code" placeholder="***">
				</form>
				<div class="alert error wrongcode" style="display: none">
					<strong>A kód nem érvényes!</strong>
				</div>
				<ul class="actions">
					<li><a class="button big submitcode" style="cursor: pointer;">Jelentkezés</a></li>
				</ul>
			   </footer>
			</section>
		</div>
	<?php }
} 
?>
