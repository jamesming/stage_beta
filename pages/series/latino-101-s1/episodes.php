<?
	$page->title = "Latino 101 Season 1 - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_Latino101_S1.png) no-repeat 0 0; height: 140px; left: 304px; top: 69px; width:616px;">
		<a href="http://www.facebook.com/Latino101" style="left:323px; top:60px; width:228px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s1";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class="active"><a href="/series/latino-101-s1">1</a></li>
					<li><a href="/series/latino-101-s2">2</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Latino Studies</a></li>
				<li><a href="#">Athletics</a></li>
				<li><a href="#">Television</a></li>
				<li><a href="#">Family Studies</a></li>
				<li><a href="#">Technology</a></li>
				<li><a href="#">Culinary Studies</a></li>
				<li><a href="#">Economics</a></li>
				<li><a href="#">Religion</a></li>
				<li><a href="#">Politics</a></li>
				<li><a href="#">Fashion </a></li>
				<li><a href="#">Art </a></li>
				<li><a href="#">Science </a></li>
				<li><a href="#">Music </a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Latino Studies</h2>
					<strong>Air Date: 1/8/10</strong>
					<p>Welcome to Latino 101&mdash;the class you never took. Find out who the original illegal aliens were, why Latinos can be as dark as Zoe Saldana or as white as Christina Aguilera, and the real reason Latinos are proud of the countries they escaped from.</p>
				</li>
				<li>
					<h2>Athletics</h2>
					<strong>Air Date: 1/15/10</strong>
					<p>According to our comic experts, when it comes to athletics Latinos don't play! We use household items as sporting equipment, never swim in the warm side of the public pool, and leave the winter sports to white people.</p>
				</li>
				<li>
					<h2>Television</h2>
					<strong>Air Date: 1/22/10</strong>
					<p>When it comes to television, Latinos have historically been invisible. But when we do show up, we're changing the game&mdash;from Desi Arnaz introducing the multi-camera shot sitcom to Dora the Explorer teaching Espa&ntilde;ol to kids in the suburbs.</p>
				</li>
				<li>
					<h2>Family Studies</h2>
					<strong>Air Date: 2/5/10</strong>
					<p>Learn why Latino families can't count their relatives on both hands and are tighter than a mariachi's pants and why your mom's version of a time-out involved you being unconscious.</p>
				</li>
				<li>
					<h2>Technology</h2>
					<strong>Air Date: 2/19/10</strong>
					<p>Why can't you kick your CrackBerry habit? How did Latino graffiti inspire Facebook? Does anyone give a twit about your tweets? Find out in this episode of Latino 101!</p>
				</li>
				<li>
					<h2>Culinary Studies</h2>
					<strong>Air Date: 3/5/10</strong>
					<p>Latinos are experts on all types of food&mdash;as long as it contains beans and hot sauce. We can make a delicacy out of the leftover parts of any animal (menudo, morcilla) and have an entire vocabulary to describe the burnt rice at the bottom of the pot.</p>
				</li>
				<li>
					<h2>Economics</h2>
					<strong>Air Date: 3/19/10</strong>
					<p>Find out if you're going to receive stimulus food stamps, why abuela keeps money in her bra, and why you can't withdraw $10 from the ATM when you only have $12 in your account.</p>
				</li>
				<li>
					<h2>Religion</h2>
					<strong>Air Date: 3/26/10</strong>
					<p>Honor your higher power! Learn about old movie theaters becoming makeshift churches, Catholic guilt keeping Latinos in check, and the Pope's flashy wardrobe.</p>
				</li>
				<li>
					<h2>Politics</h2>
					<strong>Air Date: 4/9/10</strong>
					<p>Latino comics debate whether President Obama is really Latino and why politicians feel the need to speak freshman-year Spanish.</p>
				</li>
				<li>
					<h2>Fashion</h2>
					<strong>Air Date: 4/23/10</strong>
					<p>From sneakers with heels to J. Lo booty shorts, see how Latinos are making their mark on the world of fashion.</p>
				</li>
				<li>
					<h2>Art</h2>
					<strong>Air Date: 5/7/10</strong>
					<p>Put down your paint brushes. Find out if graffiti is trash or treasure, why Picasso was attracted to women with three eyes, and the real meaning behind your Chinese tattoo.</p>
				</li>
				<li>
					<h2>Science</h2>
					<strong>Air Date: 5/14/10</strong>
					<p>Maybe mom wasn't always right. Explore the questionable logic of Walter Mercado's horoscopes, hilarious home remedies, and Darwin's Theory about why your uncle is so hairy.</p>
				</li>
				<li>
					<h2>Music</h2>
					<strong>Air Date: 5/28/10</strong>
					<p>Listen up and find out why Mexican music involves way too much tuba, why salsa has nothing to do with chips, and why reggaeton artists can't act hard in glittery t-shirts and manicured eyebrows.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;
?>




