<?php class Index extends BaseLayout{

	function init(){ parent::init();
		if(!isset($_SESSION['participant'])) Page::render('Login');
	}
	
	function header(){ if($_GET["warning"] == 1){ ?>
		<header id="header" class = "usedcode">
			<div class="alert warning">
				<strong>Figyelem! </strong>A kóddal már került leadásra jelentkezés, újabb mentés az előzőt felülírja!
			</div>
         </header>
	<?php }
	}

	function content(){ ?>
			<div id="main">
			  <section id="one" class="features">
               <header class="major">
                  <h2>Kedves vendégünk!</h2>
                  <p>Sok szeretettel várunk Téged az esküvőnkre!</p>
               </header>
               <div class="content">
				  <section class="feature2">
                     <span class="icon major fa-map-marker"></span>
                     <h3>Helyszín</h3>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.3422109106623!2d17.815591315860743!3d46.91565354344327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769bb552a298a25%3A0xc9e7c2e735044ff!2zSHVzesOhciBWZW5kw6lnbMWR!5e0!3m2!1sen!2shu!4v1459347064634" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </section>
                  <section class="feature2">
                     <span class="icon major fa-calendar"></span>
                     <div class="image smallimgwrap"><a class="" href="images/tamigergo2.jpg" data-lightbox="Tami és Gergő 1"><img class="smallimg" src="images/tamigergo2.jpg" alt="Tami és Gergő" /></a></div>
                     <h3>Dátum</h3>
                     <p>2016 Július 1.</p>
                     <h3>Vendégvárás</h3>
                     <p>16:00 órától</p>
                     <h3>Szertartás</h3>
                     <p>19:30 órától</p>
                     
                     <p>A szertartás után vacsora, és lagzi kifulladásig ugyanitt.</p>
                  </section>
                  <a class="arrow-wrap" href="#two" id="arrow">
						<span class="arrow"></span>
				  </a>
               </div>
            </section>

            
            <section id="two" class="features">
               <header class="major">
                  <h2>Kérjük a szervezés megkönnyítése érdekében válaszolj néhány kérdésünkre!</h2>
                  <p>(Egyik mező kitöltése sem kötelező)</p>
               </header>
               <div class="content">
				  <section class="feature2">
					 <span class="icon major fa-envelope"></span>
					<h3>Adatok</h3>
					<p>Név: </p><input name="name" class="myinput" type="text">
					<p>E-mail: (diszkréten kezeljük, csak az utazás szervezéséhez, és rendkívüli esetben használjuk)</p><input name="email" class="myinput" type="email">
                  </section>
                  <section class="feature2">
                     <span class="icon major fa-spoon"></span>
                     <h3>Vacsora</h3>
                     <p>Menü: (még egyeztetés alatt)</p>
                     <p>Vegyes rántott/roston sült hústál, rántott sajt, rántott/töltött zöldségek, saláta, vegyes köret.</p>
                     <br>
                     <p>Kérlek, hogyha van bármilyen speciális kívánságod a felszolgált étellel kapcsolatban, itt jelezd (allergia, érzékenység, anti-hús...)</p>
                     <textarea class="myinput biginput" name="foodSpecialNeeds"></textarea>
                  </section>
                  <a class="arrow-wrap" href="#three">
						<span class="arrow"></span>
				  </a>
               </div>
            </section>
            
           <section id="three" class="features">
               <header class="major">
                  <h2>Szállás</h2>
                  <p>Elhelyezést az alábbi két szálláson tudunk biztosítani (a következő oldalon dönthetsz, hogy kérsz-e szállást)</p>
               </header>
               <div class="content">
                  <section class="feature2">
                    <span class="icon major fa-bed"></span>
					<h3>Szállás 1</h3>
					<p>Zánkán a Zabszalma túristaházban</p>
					<a href="http://likebalaton.hu/szallas/zabszalma-turistahaz-zanka" target="_blank" class="button" style="cursor: pointer;">Infó</a><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.9709708610094!2d17.672554315808995!3d46.883619645631725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDbCsDUzJzAxLjAiTiAxN8KwNDAnMjkuMSJF!5e0!3m2!1sen!2shu!4v1459371889238" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </section>
                  <section class="feature2">
                    <span class="icon major fa-bed"></span>
					<h3>Szállás 2</h3>
					<p>Philip-Cindy Vendégház Örvényesen</p>
					<a href="http://www.zimmerinfo.hu/orvenyes/philip-cindy/hu.htm" target="_blank" class="button" style="cursor: pointer;">Infó</a><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.3210774462273!2d17.812555015606705!3d46.916069079144854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769a4aaf2de5147%3A0xcff2f4be20dde873!2zRmVueXZlcyB1LiA4LCDDlnJ2w6lueWVzLCA4MjQy!5e0!3m2!1sen!2shu!4v1460101186076" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </section>
                  <a class="arrow-wrap" href="#four">
						<span class="arrow"></span>
				  </a>
               </div>
            </section>
            
            <section id="four" class="features">
               <header class="major">
                  <h2>Szállás, utazás, Lagzi</h2>
                  <p></p>
               </header>
               <div class="content">
                  <section class="feature2">
                    <span class="icon major fa-bed"></span>
					<h3>Szállás</h3>
					<p>Kérünk, hogy csak abban az esetben folytasd a kitöltést, hogyha biztosan tudod már, hogy kérsz/nem kérsz szállást, mert ezek alapján fogjuk lefoglalni a szükséges mennyiségű férőhelyet! (Az utolsó dátum a pontos létszám leadásához: május 10)</p>
					<span class="custom-dropdown">
						<select name="occupationOption" class="custom-dropdown__select">
							<option value="-1">Kérjük válassz...</option>
							<option value="0">Kérek szállást</option>
							<option value="1">Nem kérek szállást</option>
						</select>
					</span>
					<span class="icon major fa-car"></span>
                     <h3>Utazás</h3>
					<span class="custom-dropdown">
						<select name="travelOption" class="custom-dropdown__select">
							<option value="-1">Kérjük válassz...</option>
							<option value="0">Autóval jövök</option>
							<option value="1">Autóval jövök, és tudok hozni másokat</option>
							<option value="2">Szeretnék helyet valakinél autóban</option>
							<option value="3">Megoldom magam az utazást</option>
						</select>
					</span>
                  </section>
                  <section class="feature2">
                    <span class="icon major fa-music"></span>
                    <h3>Lagzi</h3>
                    <p>A vacsora után várunk mindenki az ugyanitt tartandó lakodalomra!</p>
                    <p>Itt van lehetőséged küldeni nekünk egy számot, így biztosan elérhető lesz, és lejátszuk :)</p>
                    <input name="song" class="myinput" type="text"></input>          
                  </section>
                  <a class="arrow-wrap" href="#five" id="arrow">
						<span class="arrow"></span>
				  </a>
               </div>
            </section>
            
            <section id="five" class="features">
               <header class="major">
                  <h2>Ital, Fotó</h2>
                  <p></p>
               </header>
               <div class="content">
                  <section class="feature2">
					<span class="icon major fa-beer"></span>
                    <h3>Ital</h3>
                    <p>Az eseményen a Legenda, és a Fóti sörfőzde söreiből, és villányi borvidékhez tartozó Janus Borház boraiból fogyaszthatnak a kedves vendégeink.</p>
                    <p>Az alkoholmentes italok fogyasztása korlátlanul szintén ingyenes, a röviditalokért a helyszínen kihelyezett becsületkasszába lehet majd adakozni.</p>
                  </section>
                  <section class="feature2">
                    <span class="icon major fa-camera"></span>
                    <h3>Fotó</h3>
                    <p>Az eseményen jelen lesz egy hivatásos fotós, ezért arra kérünk, segítsétsd a munkáját azzal, hogy hagyod érvényesülni, helyet adsz neki a fotózáshoz, még akkor is, ha éppen te magad szerettél volna lőni egy képet. Továbbá kérünk mindenkit, hogy amíg mi nem teszünk fel képet, ne töltsetek fel semmilyen közösségi médiára és portálra képeket, vagy videókat, mindenkivel meg fogjuk osztani az eseményről készült fotókat a maga idejében. Tisztelettel köszönjük!</p>
                    <div style="float: left;" class="image smallimgwrap"><a class="" href="images/tg3.jpg" data-lightbox="Tami és Gergő"><img class="smallimg" src="images/tg3.jpg" alt="Tami és Gergő" /></a></div>
                  </section>
                  <a class="arrow-wrap" href="#six" id="arrow">
						<span class="arrow"></span>
				  </a>
               </div>
            </section>
			
            <section id="six" class="spotlight">
               <div class="image"><a class="" href="images/tamigergo.jpg" data-lightbox="Tami és Gergő 2"><img src="images/tamigergo.jpg" alt=""></a></div>
               <div class="content">
                  <h2>További információk</h2>
                  <p>A szállással kapcsolatos részletekről mindenkit időben értesíteni fogunk. A lagziból a szállásra tartóknak segítünk majd a fuvarozásban, így célszerű, hogy mindenki a szállásához érkezzen, ahol lepakolhat, átöltözhet. Reggel az autóhoz visszajutás részleteit a helyszínen egyeztetjük.</p>
                  <p>Az eseményről készült fotók később ugyanezek a weboldalon fognak megjelenni.</p>
                  <p>Kérünk, hogy csak abban az esetben kattints a befejezés gombra, hogyha biztos vagy azokban, amiket válaszoltál. Természetesen újra ki lehet tölteni a kérdőívet, de az felül fogja írni a korábbi adatokat
                  <ul class="actions">
					<li><a class="button big submitform" style="cursor: pointer;">Befejezés</a></li>
				</ul>
               </div>				   
            </section>
            
            <div name="overflowbg" class="oveflowbg" role="main">
            <section id="seven" class="cta successmessage">
               <header>
                  <h2>Köszönjük a jelentkezést!</h2>
                  <p>Amennyiben több meghívót is kaptatok, ne felejtsétek azokat is regisztrálni!</p>
                  <p>Találkozunk 2016 Július 1-én!</p>
               </header>
               <ul class="actions">
                  <li><a class="button big close" style="cursor: pointer;">Bezárás</a></li>
                  <li><a class="button big tostart" style="cursor: pointer;">Kezdőoldal</a></li>
               </ul>
            </section>
			</div>
			
			<div name="overflowbg_error" class="unsuccess" role="main">
            <section id="eight" class="cta unsuccessmessage">
               <header>
                  <h2>HIBA</h2>
                  <p>Nem sikerült elmenteni az adatokat!</p>
               </header>
               <ul class="actions">
                  <li><a class="button big close_error" style="cursor: pointer;">Bezárás</a></li>
               </ul>
            </section>
			</div>
            
		</div>
	<?php }
} 
