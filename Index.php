<?php class Index extends BaseLayout{

	function init(){ parent::init();
		if(!isset($_SESSION['participant'])) Page::render('Login');
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
                     <h3>Dátum</h3>
                     <p>2016 Július 1.</p>
                     <h3>Vendégvárás</h3>
                     <p>16:00 órától</p>
                     <h3>Szertartás</h3>
                     <p>19:30 órától</p>
                     
                     <p>A szertartás után vacsora, és lagzi kifulladásig ugyanitt.</p>
                  </section>
               </div>
            </section>
            
            <section id="two" class="features">
               <header class="major">
                  <h2>Kérjük a szervezés megkönnyítése érdekében válaszolj néhány kérdésünkre!</h2>
                  <p></p>
               </header>
               <div class="content">
				  <section class="feature2">
					 <span class="icon major fa-envelope"></span>
					<h3>Adatok</h3>
					<p>Név: </p><input name="name" class="myinput">
					<p>E-mail: (diszkréten kezeljük, csak az utazás szervezéséhez, és rendkívüli esetben használjuk)</p><input name="email" class="myinput">
					
                     <span class="icon major fa-car"></span>
                     <h3>Utazás</h3>
					<span class="custom-dropdown">
						<select class="custom-dropdown__select">
							<option value="-1">Kérjük válassz...</option>
							<option value="0">Autóval jövök</option>
							<option value="1">Autóval jövök, és tudok hozni másokat</option>
							<option value="2">Szeretnék helyet valakinél autóban</option>
							<option value="3">Megoldom magam az utazást</option>
						</select>
					</span>
                  </section>
                  <section class="feature2">
                     <span class="icon major fa-spoon"></span>
                     <h3>Vacsora</h3>
                     <p>Menü:</p>
                     <br>
                     <p>Kérlek, hogyha van bármilyen speciális kívánságod a felszolgált étellel kapcsolatban, itt jelezd (allergia, érzékenység, anti-hús...)</p>
                     <textarea class="myinput biginput" name="foodSpeacialNeeds"></textarea>
                  </section>

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
					<p>Zánkán a Zabszalma túristaházban 23 férőhely</p>
					<a href="http://likebalaton.hu/szallas/zabszalma-turistahaz-zanka" target="_blank" class="button" style="cursor: pointer;">Infó</a><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.9709708610094!2d17.672554315808995!3d46.883619645631725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDbCsDUzJzAxLjAiTiAxN8KwNDAnMjkuMSJF!5e0!3m2!1sen!2shu!4v1459371889238" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </section>
                  <section class="feature2">
                    <span class="icon major fa-bed"></span>
					<h3>Szállás 2</h3>
					<p>Valahol máshol</p>
					<a href="http://likebalaton.hu/szallas/zabszalma-turistahaz-zanka" target="_blank" class="button" style="cursor: pointer;">Infó</a><br>
                  </section>
               </div>
            </section>
            
            <section id="four" class="features">
               <header class="major">
                  <h2>Szllás + egyéb</h2>
                  <p></p>
               </header>
               <div class="content">
                  <section class="feature2">
                    <span class="icon major fa-bed"></span>
					<h3>Szállás</h3>
					<p>Kérünk, hogy csak abban az esetben folytasd a kitöltést, hogyha biztosan tudod már, hogy kérsz/nem kérsz szállást, mert ezek alapján fogjuk lefoglalni a szükséges mennyiségű férőhelyet! (Az utolsó dátum a pontos létszám leadásához: május 10)</p>
					<span class="custom-dropdown">
						<select class="custom-dropdown__select">
							<option value="-1">Kérjük válassz...</option>
							<option value="0">Kérek szállást</option>
							<option value="1">Nem kérek szállást</option>
						</select>
					</span>
                  </section>
                  <section class="feature2">
                    <span class="icon major fa-music"></span>
                    <h3>Lagzi</h3>
                    <p>Az este folyamán rock DJ fogja szolgáltatni a zenét. Itt van lehetőséged küldeni nekünk egy számot, így biztosan elérhető lesz, és lejátszuk :)</p>
                    <input name="song" class="myinput">
                    <span class="icon major fa-beer"></span>
                    <h3>Ital</h3>
                    <p>Az eseményen a Legenda, és a Fóti sörfőzde söreiből, és villányi borvidékhez tartozó Janus Borház boraiból fogyaszthatnak a kedves vendégeink.</p>
                    <p>Az alkoholmentes italok fogyasztása korlátlanul szintén ingyenes, a röviditalokért a helyszínen kihelyezett becsületkasszába lehet majd adakozni.</p>
                  </section>
               </div>
            </section>
			
            <section id="five" class="spotlight">
               <div class="image"><img src="images/wedring.jpg" alt=""></div>
               <div class="content">
                  <h2>Volutpat ante libero</h2>
                  <p>Praesent egestas quam at lorem imperdiet lobortis. Mauris condimentum et euismod ipsum, at ullamcorper libero dolor auctor sit amet. Proin vulputate amet sem ut tempus. Donec quis ante viverra, suscipa facilisis at, vestibulum id urna. Lorem ipsum dolor sit amet sollicitudin.</p>
               </div>
            </section>
			
            <section id="six" class="spotlight alt">
               <div class="image"><img src="images/wedring.jpg" alt=""></div>
               <div class="content">
                  <h2>Elit auctor tempus</h2>
                  <p>Praesent egestas quam at lorem imperdiet lobortis. Mauris condimentum et euismod ipsum, at ullamcorper libero dolor auctor sit amet. Proin vulputate amet sem ut tempus. Donec quis ante viverra, suscipa facilisis at, vestibulum id urna. Lorem ipsum dolor sit amet sollicitudin.</p>
               </div>
            </section>
            </div>
	<?php }
} 
