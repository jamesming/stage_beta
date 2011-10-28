<?
	$page->title = "Pastport Puerto Rico - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport_Panama.png) no-repeat 0 0; left:369px; top:132px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-panama";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active" ><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
					<li class="active"><a href="/series/pastport-panama">6</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Travel Tunes: 10 Timeless Serenades to Latin America</h2>
			<img class="bordered media" src="/assets/images/featured/PP_panama_features_458x248.jpg" />
<span >

<p >On<i>&nbsp;Pastport: Panama</i>, Tatyana Ali,&nbsp;<i>The Fresh Prince of Bel-Air</i>&nbsp;alum who moonlights as a gold-selling R&amp;B singer, adds an exciting soundtrack to her trip to her mom's homeland when she performs a self-penned bilingual duet with Los Rabanes. We can't hook you up with the Latin Grammy winning band, but our list of 10 Timeless Serenades to Latin America can help you plan the perfect soundtrack for your next trip -- or family reunion.<b><u></u><u></u></b></p>
<p ><b>"Miss Little Havana," Gloria Estefan</b><br />Gloria Estefan takes a musical journey back to her Cuban homeland on<i>Miss Little Havana</i>, the bilingual pop goddess' first English-language album in eight years. The salsa infused collection of tunes includes the mercilessly melodic title track, a sexy Spanglish song about a starry-eyed Cuban beauty with her sites set on superstardom no matter what the cost.<b><u></u><u></u></b></p>
<p ><b>"Mexico," Elvis Presley</b><br />The King's pop-rock postcard home about a trip south of the border finds the legendary ladies' man looking to "live it up and love it up, amigo!" and promising that "life begins when you're in Mexico." Sticking to a Mexican theme -- and bad rhymes -- Elvis included the track "You Can't Say No in Acapulco" as the single's B-side.<u></u><u></u></p>
<p ><b>"Don't Cry for Me Argentina," Lea Michele and Chris Colfer</b><br />The kids from&nbsp;<i>Glee</i>&nbsp;did a credible job of introducing this classic to a new generation when it was featured on the show last year. The performance was so popular that Lea Michele and Chris Colfer each released a solo version. The powerful pop homage to the people of South America's second largest country is from the Broadway musical&nbsp;<i>Evita</i>, about the life of legendary former First Lady of Argentina, Evita Per&#243;n. It has been covered by everyone from Madonna to Tom Jones.<b><u></u><u></u></b></p>
<p ><b>"Mexican Moon / Bajo la Luna Mexicana," Concrete Blonde</b><br />Popular '90s band Concrete Blonde scored a hit with this moody musical tale of a lovelorn traveler reminiscing about a lost love while dancing the blues away one moonlit Mexican evening. The song is the title-track to the band's 1993 album, which kicks off with an English-language version of the tune and concludes with an equally stunning Spanish version.<u></u><u></u></p>
<p ><b>"La Isla Bonita," Madonna</b><br />Upon its release in 1983, Madonna called this Spanglish pop gem a tribute to the "beauty and mystery of Latin American people." The song infuses Spanish guitars and salsa rhythms to set the mood in this ode to the fictitious "beautiful island" of San Pedro. The timeless track is apparently a favorite of the bilingual pop superstar, who has included the song in virtually all of her international tours, sometimes performing it in Spanish.<b><u></u><u></u></b></p>
<p ><b>"Going to Brazil," Motorhead</b><br />The brash British heavy metal legends boast about preparing to party like a rock star as they make their way to Brazil for some R&amp;R -- rock and roll!<u></u><u></u></p>
<p ><b>"Mexican Radio," Wall of Voodoo</b>Awesome '80s band Wall of Voodoo gets giddy for good Spanish songs on this fun and funky 1983 pop-rock gem. The L.A. band penned the tune about their love of listening to Mexican AM clear channel stations like XEG-AM and XERF-AM. The classic track has since been covered by many Mexican and American artists, including Mexico-based electro-rockers Kinky and Texas band Vallejo.<u></u><u></u></p>
<p ><b>"O Mexico," Trisha Yearwood</b><br />Country superstar Trisha Yearwood is looking for a soothing change of scenery and a way to heal a broken heart in this South of the Border serenade.<u></u><u></u></p>
<p ><b>"I Go to Rio," Peter Allen</b><br />Singer-songwriter Peter Allen's ode to the "land of sun, Samba and wine" has all the pop pizzazz you'd expect in a tune about the sexy global party destination.<b><u></u><u></u></b></p>
<p ><b>"Mexico," James Taylor</b><br />The king of breezy-listening music dreams of the day he'll visit Mexico, where "the sun's so hot, you'll forget to go home." The classic appears on Taylor's 1975 album,&nbsp;<i>Gorilla</i>.</p>

</span>
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