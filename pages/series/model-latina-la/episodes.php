<?
	$page->title = "Model Latina L.A. - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ML_LA.png) no-repeat 0 0; left:413px; top:84px; width:519px; height:140px;">
		<a href="http://www.facebook.com/ModelLatina" style="left:219px; top:61px; width:249px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "model-latina-la";
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
					<li class="active"><a href="/series/model-latina-la">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
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
				<li><a href="#">Ugly Beauty</a></li>
				<li><a href="#">Jessy's Girl</a></li>
				<li><a href="#">Frugal Fashionista</a></li>
				<li><a href="#">Booty Boutique</a></li>
				<li><a href="#">Latina en la Cocina</a></li>
				<li><a href="#">Mi Gente</a></li>
				<li><a href="#">Viva Latina</a></li>
				<li><a href="#">The Book Ends Part I</a></li>
				<li><a href="#">Model Recap</a></li>
				<li><a href="#">The Book Ends Part II</a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Ugly Beauty</h2>
					<p>The final contestants pose in swimwear after 10 girls are cut. Their very first challenge: let their inner beauty shine through not-so-pretty makeup and clothing.</p>
				</li>
				<li>
					<h2>Jessy's Girl</h2>
					<p>Renowned music video director, Jessy Terrero, chooses one of the nine remaining contestants to be in his new video.</p>
				</li>
				<li>
					<h2>Frugal Fashionista</h2>
					<p>The models are given $50 to style their partners with thrifty finds from L.A.'s garment district. Best dressed wins!</p>
				</li>
				<li>
					<h2>Booty Boutique</h2>
					<p>The girls get a serious workout by hip-hop abs guru Shaun T before shooting a print ad for Paige Premium Denim.</p>
				</li>
				<li>
					<h2>Latina en la Cocina</h2>
					<p>The remaining contestants are photographed while cooking an authentic Cuban meal with a renowned chef. Their shots will be used as advertisements for the restaurant.</p>
				</li>
				<li>
					<h2>Mi Gente</h2>
					<p>The models write and star in a public service announcement for Voto Latino, which encourage young Latinos to rock the vote.</p>
				</li>
				<li>
					<h2>Viva Latina</h2>
					<p>The girls get crafty and create their own magazine spread for Latina magazine. Beauty director Angelique Serrano picks the best layout and one more contestant gets the boot.</p>
				</li>
				<li>
					<h2>The Book Ends Part I</h2>
					<p>It's down to two contestants, who must direct and walk in their very own fashion show with surprise assistants&mdash;eliminated models!</p>
				</li>
				<li>
					<h2>Model Recap</h2>
					<p>We take you back to highlights from the whole season, including never-before-seen footage and outtakes.</p>
				</li>
				<li>
					<h2>The Book Ends Part II</h2>
					<p>It's the end of the road for the final two contestants. Find out who produces the best show and wins the Model Latina title.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>







				


