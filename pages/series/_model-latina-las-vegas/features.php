<?
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO

EOHERO;


	$seriesBase = "model-latina-las-vegas";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/model-latina-la">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
					<li><a href="/series/model-latina-nyc">3</a></li>
					<li class="active"><a href="http://mynuvotv.com/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Feature 1</h2>
			<img class="bordered media" src="http://placehold.it/458x248" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nulla nisi, fermentum sed gravida eu, tincidunt quis lorem. Vestibulum gravida, purus vitae fermentum semper, magna arcu malesuada quam, sit amet tempus nibh dolor eget libero. Pellentesque at enim justo, id faucibus urna. Integer hendrerit nisi tristique turpis malesuada vulputate. Quisque ut libero est, sit amet molestie leo. Donec a lacus felis.</p>			
<!--			<a class="no-break" href="#">Read More +</a>-->
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>