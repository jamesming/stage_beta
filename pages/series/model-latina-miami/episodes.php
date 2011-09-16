<?
	$page->title = "Model Latina Miami - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ML_Miami.png) no-repeat 0 0; left:439px; top:90px; width:537px; height:132px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:194px; top:53px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-miami";
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
					<li><a href="/series/model-latina-la">1</a></li>
					<li class="active"><a href="/series/model-latina-miami">2</a></li>
					<li><a href="/series/model-latina-nyc">3</a></li>
					<li><a href="/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Episode 1: Making the Cut</a></li>
				<li><a href="#">Episode 2: Sexy Swimsuits </a></li>
				<li><a href="#">Episode 3: Au Naturel</a></li>
				<li><a href="#">Episode 4: Mama&rsquo;s Girl</a></li>
				<li><a href="#">Episode 5: Passion Play</a></li>
				<li><a href="#">Episode 6: Epic Models</a></li>
				<li><a href="#">Episode 7: Model Exposure</a></li>
				<li><a href="#">Episode 8: Seaside Strut</a></li>
				<li><a href="#">Episode 9: Viral Vixens</a></li>
				<li><a href="#">Episode 10: Brand Me</a></li>
				<li><a href="#">Episode 11: Be Kind, Rewind</a></li>
				<li><a href="#">Episode 12: Rock the Runway Part I</a></li>
				<li><a href="#">Episode 13: Rock the Runway Part II</a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Episode 1</h2>
					<p>Making the Cut: Fifteen girls wowed the judges, but only 12 can compete. Find out which three unlucky models are sent packing and who gets the keys to the Miami mansion.</p>
				</li>
				<li>
					<h2>Episode 2</h2>
					<p>Sexy Swimsuits: The final contestants face their very first challenge: embody the classic bathing beauty in Nicolita swimsuits!</p>
				</li>
				<li>
					<h2>Episode 3</h2>
					<p>Au Naturel: Find out who looks good grimy and who could use a touch up! The ladies hike through a rainforest and find a jungle runway where they must strut their stuff sans showers or makeup.</p>
				</li>
				<li>
					<h2>Episode 4</h2>
					<p>Mama&rsquo;s Girl: The models transform themselves into the mirror image of their mothers&mdash;straight down to hair, makeup and &lsquo;80s outfits!</p>
				</li>
				<li>
					<h2>Episode 5</h2>
					<p>Passion Play: See who portrays lust, envy and betrayal best in a shoot with Mr. Ladies&rsquo; Man himself, hot novela star Alfonso &ldquo;Poncho&rdquo; de Anda.</p>
				</li>
				<li>
					<h2>Episode 6</h2>
					<p>Epic Models: The models put their creativity to the test&mdash;and must look their best&mdash;to create a professional brochure for Miami&rsquo;s lavish Epic Hotel.</p>
				</li>
				<li>
					<h2>Episode 7</h2>
					<p>Model Exposure: It&rsquo;s the opportunity of a lifetime! The models write, direct, style, and star in their very own Verizon Wireless billboard. The winners will see their faces on the streets of Miami.</p>
				</li>
				<li>
					<h2>Episode 8</h2>
					<p>Seaside Strut: Competition heats up with a seaside fashion show for island lovers Liza & Tara and their Resort Wear line. Only one of the ladies will book the job.</p>
				</li>
				<li>
					<h2>Episode 9</h2>
					<p>Viral Vixens: The models hit the beach to create and star in a video for Orbit Mist hydrating gum. Who&rsquo;s the best at selling fresh breath?</p>
				</li>
				<li>
					<h2>Episode 10</h2>
					<p>Brand Me: The final three face the most difficult challenge yet: create a marketing plan for the most important brand&mdash;their own! </p>
				</li>
				<li>
					<h2>Episode 11</h2>
					<p>Be Kind, Rewind: We bring you up to speed with the best of Model Latina Miami in preparation for the season finale. </p>
				</li>
				<li>
					<h2>Episode 12</h2>
					<p>Rock the Runway Part I: The final two move out of the mansion and into the lavish Epic Hotel where they meet Q Management CEO and potential employer Jeffrey Kolsrud. Models from the first season surprise them with news of their final fashion show challenge. </p>
				</li>
				<li>
					<h2>Episode 13</h2>
					<p>Rock the Runway Part II: The pressure&rsquo;s on! The final two must produce all aspects of a fashion show for Dominicana designer Anel Verna&mdash;and walk the runway. Only one model will prove she has what it takes to be the next Model Latina.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>




