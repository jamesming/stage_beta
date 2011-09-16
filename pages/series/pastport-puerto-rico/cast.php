<?
	$page->title = "Pastport Puerto Rico - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport-PR.png) no-repeat 0 0; left:344px; top:70px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-puerto-rico";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li class="active"><a href="/series/pastport-puerto-rico">5</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Puerto-Rico/cast_PP-PR-Alanna-Ubach.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Alanna Ubach</h3>
						</div>
						<p><a href="http://www.alannaubach.net/" target="_blank">Alanna</a>, 36, was born and raised in Downey, California to a Puerto Rican father and Mexican mother. The Latina actress is best known for her roles in <i>Legally Blonde</i> and <i>Meet the Fockers</i>. She's also a voice-over star who's lent her chops to the main character, Manny, in Nickelodeon's first ever flash animation series, <i>El Tigre: The Adventures of Manny Rivera</i>, cheerleader Liz Allan in <i>The Spectacular Spider-Man</i>, and Lola Boa in Disney's <i>Brandy & Mr. Whiskers</i>. Alanna has also written and directed two short films, <i>Mi Amor Mi Dulce</i> and <i>The Fart Show</i>.</p>
					</div>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Puerto-Rico/cast_PP-PR-Pelle.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Pelle</h3>
						</div>
						<p> Alanna's boyfriend, Pelle, was born in Sweden and has lived in the U.S. for 16 years. He runs an import/export business in L.A., has never been to Puerto Rico, and doesn't speak a lick of Spanish. According to Alanna, Pelle's a workaholic just like her dad was. Let's see if he can work in some time to help Alanna cope with the death of her father.</p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Puerto-Rico/cast_PP-PR-Lara.jpg" />
					<div class="meta">
						<h3>Lara</h3>
					</div>
					<p>Alanna's driver, Lara, not only takes her to the house her father grew up in, but she also lends an ear when Alanna needs her most--after arguments with her boyfriend! Lara becomes a much needed travel partner and friend.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Puerto-Rico/cast_PP-PR-Awilda.jpg" />
					<div class="meta">
						<h3>Awilda</h3>
					</div>
					<p>This Puerto Rican spiritual guide helps Allana cope with the death of her father by honoring his spirit and finally letting go.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>