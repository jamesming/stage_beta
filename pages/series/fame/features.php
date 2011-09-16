<?
	$page->title = "Fame - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Fame.png) no-repeat 0 0; left:493px; top:71px; width:291px; height:111px;">
	</div>
EOHERO;


	$seriesBase = "fame";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="last active"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Before Glee, There Was Fame</h2>
			<img class="bordered media" src="/assets/images/featured/fame-Features_458x248.jpg" />
			<p>Impress the heck out of your friends with these random facts about Fame, the first ever artsy fartsy series inspired by the ever-popular flick of the same name.</p>			
			<ol>
				<li><strong>Looks can be deceiving.</strong> The movie might've been shot in New York City, but the series was shot almost entirely in Los Angeles at the Metro-Goldwyn-Mayer studios. The cast and crew made at least one trip to New York City each season to film exterior scenes only. </li>
				<li><strong>Debbie the Diva.</strong> In Fame's final year, Debbie Allen was appearing on Broadway in Sweet Charity and had to film all of her scenes in New York City, which explains why she appears only in exterior scenes for many episodes.</li>
				<li><strong>Just Like Glee.</strong> The series combined musical numbers with dramatic scenes. Cast members went on the road and performed live concerts (usually performing songs first done on the series) to satisfy the fan base of young people who regularly watched the show.</li>
				<li><strong>It was competitive.</strong> Over 9,000 people auditioned for actress/singer Nia Peeples' role as Nicole Chapman. </li>
				<li><strong>FYI.</strong> Glee is only loosely based on Fame. Glee is set in a regular high school, not a performing arts school like Fame, and revolves around the Glee club with side stories about the faculty. </li>
			</ol>
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

 

