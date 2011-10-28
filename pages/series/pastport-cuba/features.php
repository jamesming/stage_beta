<?
	$page->title = "Pastport Cuba - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Cuba.png) no-repeat 0 0; left:331px; top:76px; width:522px; height:137px;">
		<a href="http://www.facebook.com/Pastport" style="left:298px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-cuba";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li class="active"><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li><a href="/series/pastport-puerto-rico">5</a></li>
					<li><a href="/series/pastport-panama">6</a></li>					
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Best of Your 'Pastport' Stories</h2>
			<img class="bordered media" src="/assets/images/featured/sitv-pastport-nicolita-ss-cubanguide-trinidad-Features_458x248.jpg" />

			<p>We asked you to tell us your story about going back to your roots. Here's what you said:</p>
			<p>
				<strong>&quot;My Cuban Roots&quot;</strong><br />
				I was born in San Francisco, CA in 1981 and am the youngest of three children. My parents came to this country from Havana, Cuba in 1980 with the hopes of a better life for me and my brothers. Although I've never had the opportunity to visit my family's hometown, I dream of the day I can, and often imagine what it would be like. My parents came to this country together, but later separated. I asked my parents about the story of their life together in Cuba, and their journey to this country is amazing. Even though my dad doesn't feel like he &quot;made it&quot; here, I tell him all the time that his only job was giving us the opportunity he didn't have. Although I was born here, the Cuban blood I have is strong. I get a great feeling inside when I listen to Cuban salsa. I'm so proud to be Cuban. All of my family has this spark and energy about them. it makes me feel like I know Cuba. Even though it's a poor country, they still dance, sing and have a great time. We don't need all of these material possessions we long for in America. Life in Cuba is about being with your family and friends, making the best of what you have and not always wanting more. I hope one day I will have a story to tell about me going to visit my family in Cuba. I'd like to share that moment with my dad, who hasn't had the opportunity to go back after 30 years. &mdash;Elizabeth Ponce, 29
			</p>
			<p>
				<strong>&quot;Belize, I'm Back.&quot;</strong><br />
				When I went back to my roots in Belize it was awesome. Me being American Latino in the only country in Latin America (Centro) where English is the main language made it easy. Believe me, I almost&nbsp; didn't come back to the States, but I wasn't of age to do so. &mdash;Hayson Tasher, 34
			</p>
			<p>
				<strong>&quot;Santa Semana&quot;</strong><br />
				For my 24th birthday my family went to Trujillo, Honduras to find out more about my great grandparents. It was my first time out of the country. I was a shock to be on unpaved roads, but quickly felt at home when I discovered $1 shots and beers.&nbsp; &mdash;Selina Sacasa, 24
			</p>
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