<?
	$page->title = "Pastport Cuba - Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
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
			<li class="active"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li class="active"><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul>
				<li class="active"><a href="#">E1: "Lorem Ipsum Dolor"</a></li>
				<li><a href="#">E2: "Lorem Ipsum"</a></li>
				<li><a href="#">E3: "Lorem Ipsum Dolor"</a></li>
				<li><a href="#">E4: "Ipsum Dolor Sit"</a></li>
				<li><a href="#">E5: "Lorem Ipsum"</a></li>
				<li><a href="#">E6: "Lorem Dolor"</a></li>
				<li><a href="#">E7: "Ipsum Sit Lorem"</a></li>
				<li><a href="#">E8: "Lorem Ipsum Dolor"</a></li>
				<li><a href="#">E9: "Lorem Ipsum"</a></li>
				<li><a href="#">E10: "Lorem Ipsum Dolor"</a></li>
				<li><a href="#">E11 "Lorem Ipsum Dolor"</a></li>
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<h2>Episode 1: "Lorem Ipsum Dolor"</h2>
			<img class="bordered media" src="http://placehold.it/458x248" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nulla nisi, fermentum sed gravida eu, tincidunt quis lorem. Vestibulum gravida, purus vitae fermentum semper, magna arcu malesuada quam, sit amet tempus nibh dolor eget libero. Pellentesque at enim justo, id faucibus urna. Integer hendrerit nisi tristique turpis malesuada vulputate. Quisque ut libero est, sit amet molestie leo. Donec a lacus felis.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nulla nisi, fermentum sed gravida eu, tincidunt quis lorem. Vestibulum gravida, purus vitae fermentum semper, magna arcu malesuada quam, sit amet tempus nibh dolor eget libero. Pellentesque at enim justo, id faucibus urna. Integer hendrerit nisi tristique turpis malesuada vulputate. Quisque ut libero est, sit amet molestie leo. Donec a lacus felis. <a class="no-break" href="/series/pastport-venezuela/features">Read More +</a></p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>