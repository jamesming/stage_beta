<?
	$page->title = "Adrenalina - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
<style>
	.section-adrenalina .theme div { background: transparent url(/assets/images/heroes/series/_bg_Adrenalina.jpg) no-repeat; }
	.stripe { background: transparent url(/assets/images/stripe_army2.png) no-repeat center top; position: relative; z-index: 2; -webkit-background-size: 2000px 1354px; }
</style>
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Adrenalina.png) no-repeat 0 0; left:407px; top:70px; width:419px; height:112px;">
	</div>
EOHERO;


	$seriesBase = "adrenalina";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Eps. 601 Latin Cross</a></li>
				<li><a href="#">Eps. 602 The North Shore</a></li>
				<li><a href="#">Eps. 603 Rodeo Dundee</a></li>
				<li><a href="#">Eps. 604 Speed</a></li>
				<li><a href="#">Eps. 605 Alley Cat Race</a></li>
				<li><a href="#">Eps. 606 Capital Sk8</a></li>
				<li><a href="#">Eps. 607: Ace of BASE</a></li>
				<li><a href="#">Eps. 608 Rodeo Surfing</a></li>
				<li><a href="#">Eps. 609 Surf the Skies</a></li>
				<li><a href="#">Eps. 610 Back in Time</a></li>
				<li><a href="#">Eps. 611 Buenos Aires Extreme</a></li>
				<li><a href="#">Eps. 612 Latin Dunes</a></li>
				<li><a href="#">Eps. 613 Deep Powder</a></li>
				<li><a href="#">Eps. 614 NYC Winter Games</a></li>
				<li><a href="#">Eps. 615 Skateboard Marathon</a></li>
				<li><a href="#">Eps. 616 Camp Woodward</a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Eps. 601 Latin Cross</h2>
					<p>Motocross your heart and hope to fly! After hitting the dirt with BMX pros, the fellas fly sky high in WWI fighter planes.</p>
				</li>
				<li>
					<h2>Eps. 602 The North Shore</h2>
					<p>Aloha! Pablo and Zalman take in the beauty of Polynesian culture of Hawaii, when they're not cage diving with sharks. </p>
				</li>
				<li>
					<h2>Eps. 603 Rodeo Dundee</h2>
					<p>When the Adrenalina crew land at a rodeo , they find out what it means to really buck broncos. </p>
				</li>
				<li>
					<h2>Eps. 604 Speed</h2>
					<p>Pablo and Zalman find out the fastest way to get around Miami when they face off in cars, speedboats, and, helicopters.</p>
				</li>
				<li>
					<h2>Eps. 605 Alley Cat Race</h2>
					<p>Liberals and conservatives will always agree on just how ruthless Washington DC's bike messengers can be. Pablo and Zalman put these bikers to the test.</p>
				</li>
				<li>
					<h2>Eps. 606 Capital Sk8</h2>
					<p>Pro athlete Keir Johnson shows Pablo and Zalman the nation's capital's national landmarks- skateboarding parks.</p>
				</li>
				<li>
					<h2>Eps. 607: Ace of BASE</h2>
					<p>Professional BASE (Buildings, Antennae, Spans, and Earth) jumper, Ben Lowe, demonstrates why BASE is simply exhilarating, utterly unqiue and a fearless sport.</p>
				</li>
				<li>
					<h2>Eps. 608 Rodeo Surfing</h2>
					<p>Pablo and Zalman discover that riding waves formed by residue from oil tankers in Galveston, Texas, isn't as greasy (or easy) as it sounds. </p>
				</li>
				<li>
					<h2>Eps. 609 Surf the Skies</h2>
					<p>After pro kite surfers teach Pablo and Zalman how to set sail, the guys decide to hang glide in the midst of a thunderstorm.</p>
				</li>
				<li>
					<h2>Eps. 610 Back in Time</h2>
					<p>The boys discover why Uruguay is the skate friendliest country in the world.</p>
				</li>
				<li>
					<h2>Eps. 611 Buenos Aires Extreme</h2>
					<p>Pablo reveals that his hometown, Buenos Aires, offers more than delectable beef, tango dancing, and fœtbol. </p>
				</li>
				<li>
					<h2>Eps. 612 Latin Dunes</h2>
					<p>After the duo free ride in sand dunes, they taste the wonder of Argentinean wines.</p>
				</li>
				<li>
					<h2>Eps. 613 Deep Powder</h2>
					<p>The team heads to the Chilean border of San Rafael so they can snowboard on one of the most exquisite mountains in the world.</p>
				</li>
				<li>
					<h2>Eps. 614 NYC Winter Games</h2>
					<p>It's the midst of winter, yet  Pablo and Zalman venture to the Big Apple to reveal the fastest mode of transportation and meet up with pro surfers, Cliff and Will Skudin.</p>
				</li>
				<li>
					<h2>Eps. 615 Skateboard Marathon</h2>
					<p>The guys take on ta 26.2 mile longboard race to promote health and fitness through action sports!</p>
				</li>
				<li>
					<h2>Eps. 616 Camp Woodward</h2>
					<p>Pablo and Zalman visit one of the greatest sports camp in the U.S. which teaches everything from cheer to BMX freestyling.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>