<?
	$page->title = "nuvoTV Stuff | nuvoTV Official Site";

	$page->template = "standard";
	$page->bodyClasses[] = "layout-ms";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/nu-stuff.png" alt="Nu Stuff" />
	</div>
EOHERO;

	if($_GET[ringtones] == 1 OR !$_GET[wallpapers]) {
	
		$page->components["content"] = <<<EOCONTENT
		<div class="series-nav">
			<ul class="unstyled">
				<!-- <li class="first"><a href="?apps=1">APPS</a></li> -->
				<li class="first"><a target='_blank' href="http://www.cafepress.com/mynuvotv">NU GEAR</a></li>
				<li class=" active"><a href="?ringtones=1">NU RINGTONES</a></li>
				<li class="last"><a href="?wallpapers=1">NU WALLPAPERS</a></li>
				
			</ul>
		</div>
		<div class="main">
			<div class="white-box block">
				<h2>Nu Ringtones</h2>
				<p>Need a new beat for your old phone?  Craving "fich, sala and wada"?  Is everybody Latino?  Do all the girls really want to be you?  Show off your NU style with one of these FREE ringtones! <a href="http://www.ehow.com/how_2076605_install-ringtones.html" target="_blank">Click here</a> for step-by-step instructions. </p>

				<div style="float: left; height: 175px;">
					<img src="/assets/images/osmin-icon.png" style="float: left; padding-right: 50px;" />
				</div>
				<ul class="unstyled ringtones">
					<!-- <li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">1.	Are You Good Man?</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=1" />Download</a>
						</div>
					</li> -->												
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">2.	Come On, Let's Go!</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=2" />Download</a>
						</div>
					</li> -->
					<li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">1.	You Only Die Once</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=3" />Download</a>
						</div>
					</li>													
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">4.	Don't Be a Hater</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=4" />Download</a>
						</div>
					</li> -->												
					<!-- <li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">5.	It's the Enemy</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=5" />Download</a>
						</div>
					</li> -->												
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">6.	Move, Move, Move!</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=6" />Download</a>
						</div>
					</li> -->
					<li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">2.	25 Poochups</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=7" />Download</a>
						</div>
					</li>													
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">8.	That's What I'm Talking 'Bout</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=8" />Download</a>
						</div>
					</li> -->
					<li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">3.	Nasty &amp; Crazy</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=9" />Download</a>
						</div>
					</li>												
					<li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">4.	 Fat Girl</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=10" />Download</a>
						</div>
					</li>
					<!-- <li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">11. I Don't Want to Hear It</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=11" />Download</a>
						</div>
					</li> -->													
					<li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">5.	 Fish, Salad, &amp; Water Part 1</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=12" />Download</a>
						</div>
					</li>
					<!-- <li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">13.	 Fish, Salad, &amp; Water Part 2</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=13" />Download</a>
						</div>
					</li> -->												
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">14. He's a Cheater</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=14" />Download</a>
						</div>
					</li> -->
					<li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">6.	 You Gonna Pay For This</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=15" />Download</a>
						</div>
					</li>													
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">16.	 Don't Lie to Me</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ring=16" />Download</a>
						</div>
					</li> -->
															
				</ul>
				<div style="border-top: 3px solid #767676; height: 20px; width: 100%; float: left;">
				</div>
				<div style="float: left; height: 100px;">
					<img src="/assets/images/ML-icon.png" style="float: left; padding-right: 40px;" />
				</div>
				<ul class="unstyled ringtones">
					<li style="width: 450px;">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">1.	All the Girls Wanna Be Me (Cosmo Remix)</h3>
							<a style="font-size: 13px;" href="/misc/ringtone.php?ml_ring=1" />Download</a>
						</div>
					</li>											
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">2.	Come On, Let's Go!</h3>
							<a style="font-size: 13px;" hrefhref="/misc/ringtone.php?ml_ring=2" />Download</a>
						</div>
					</li> -->
				</ul>
				<div style="border-top: 3px solid #767676; height: 20px; width: 100%; float: left;">
				</div>
				<div style="float: left; height: 100px;">
					<img src="/assets/images/latino101-icon.png" style="float: left; padding-right: 54px;" />
				</div>
				<ul class="unstyled ringtones">
					<li>
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">1.	Everybody's Latino</h3>
							<a style="font-size: 13px;" href="/misc/Everybodys_Latino.php?ring=1" />Download</a>
						</div>
					</li>											
					<!-- <li class="col2">
						<div style="min-height: 40px;">
							<img src="/assets/images/ringtone-icon.png" style="float: left; padding-right: 10px; margin-top: 3px;" />
							<h3 style="font-size: 15px; margin-bottom: 3px;">2.	Come On, Let's Go!</h3>
							<a style="font-size: 13px;" hrefhref="/misc/ringtone.php?ring=2" />Download</a>
						</div>
					</li> -->
				</ul>
			</div>
		</div>
		<div class="sidebar-right">
			<div class="ad ad-tall block"></div>
		</div>
EOCONTENT;
	
	} else {
	
		$page->components["content"] = <<<EOCONTENT
		<div class="series-nav">
			<ul class="unstyled">
				<!-- <li class="first"><a href="/series/$seriesBase">APPS</a></li> -->
				<li class="first"><a target='_blank' href="http://www.cafepress.com/mynuvotv">NU GEAR</a></li>
				<li class=""><a href="?ringtones=1">NU RINGTONES</a></li>
				<li class="last active"><a href="?wallpapers=1">NU WALLPAPERS</a></li>
							</ul>
		</div>
		<div class="main">
			<div class="white-box block">
				<h2>Nu Wallpapers</h2>
				<p>Deck out your desktop with some super cool wallpaper from your favorite nuvoTV shows. Enjoy!</p>
		<!--		
			</div>
			<div class="white-box block">
				<h2>Wallpapers</h2>
		-->
				<ul class="unstyled wallpapers">
					<li>
						<a class="media" href="/assets/images/wallpapers/MLLV_wallpaper_1024x768-v3.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-MLLV_wallpaper_1024x768-v3.jpg" /></a>
						<div class="copy">
							<h3>Model Latina Las&nbsp;Vegas</h3>
							<a href="/assets/images/wallpapers/MLLV_wallpaper_1024x768-v3.jpg" target="_blank" />Download</a>
						</div>
					</li>												
					<li class="col2">
						<a class="media" href="/assets/images/wallpapers/OperationOsmin_1024x768-v1.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-OperationOsmin_1024x768-v1.jpg" /></a>
						<div class="copy">
							<h3>Operation Osmin</h3>
							<a href="/assets/images/wallpapers/OperationOsmin_1024x768-v1.jpg" target="_blank" />Download</a>
						</div>
					</li>
					<li>
						<a class="media" href="/assets/images/wallpapers/Latino_101_1024x768.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-Latino_101_1024x768.jpg" /></a>
						<div class="copy">
							<h3>Latino 101</h3>
							<a href="/assets/images/wallpapers/Latino_101_1024x768.jpg" target="_blank" />Download</a>
						</div>
					</li>													
					<li class="col2">
						<a class="media" href="/assets/images/wallpapers/PastportVenezuela_1024x768-v1.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-PastportVenezuela_1024x768-v1.jpg" /></a>
						<div class="copy">
							<h3>Pastport Venezuela</h3>
							<a href="/assets/images/wallpapers/PastportVenezuela_1024x768-v1.jpg" target="_blank" />Download</a>
						</div>
					</li>												
					<li>
						<a class="media" href="/assets/images/wallpapers/PastportVenezuela_1024x768-v2.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-PastportVenezuela_1024x768-v2.jpg" /></a>
						<div class="copy">
							<h3>Pastport Venezuela</h3>
							<a href="/assets/images/wallpapers/PastportVenezuela_1024x768-v2.jpg" target="_blank" />Download</a>
						</div>
					</li>												
					<li class="col2">
						<a class="media" href="/assets/images/wallpapers/PastportVenezuela_1024x768-v3.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-PastportVenezuela_1024x768-v3.jpg" /></a>
						<div class="copy">
							<h3>Pastport Venezuela</h3>
							<a href="/assets/images/wallpapers/PastportVenezuela_1024x768-v3.jpg" target="_blank" />Download</a>
						</div>
					</li>							
					<li>
						<a class="media" href="/assets/images/wallpapers/nuvoTV_1024x768_b.jpg" target="_blank" /><img class="bordered" src="/assets/images/wallpapers/thumb-nuvoTV_1024x768_b.jpg" /></a>
						<div class="copy">
							<h3>nuvoTV</h3>
							<a href="/assets/images/wallpapers/nuvoTV_1024x768_b.jpg" target="_blank" />Download</a>
						</div>
					</li>
															
				</ul>
			</div>
		</div>
		<div class="sidebar-right">
			<div class="ad ad-tall block"></div>
		</div>
EOCONTENT;
	
	
	}
?>