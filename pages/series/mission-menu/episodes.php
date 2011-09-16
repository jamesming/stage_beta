<?
	$page->title = "Mission Menu- Episodes | nuvoTV Official Site";
	$page->template = "standard";
		
	$page->bodyClasses[] = "layout-bms";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div  class="controls" style="height: 171px;left: 388px;top: 65px;width: 568px;background:transparent url(/assets/images/heroes/series/txt-SP-MISSIONMENU.png) no-repeat 0 0; ">
		<a href="http://www.facebook.com/pages/Mission-Menu/124750807626746" style="left:235px; top:52px; width:247px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "mission-menu";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			 <li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active last"><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<!--<li><a href="/series/$seriesBase/features">Features</a></li>  -->
			<!--<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class='active'><a href="/series/mission-menu">1</a></li>

				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="episodes white-box block">
			<h2>Episode Guide</h2>
			<ul class="episode-list">
				<li><a href="#">Eps. 1: Mission Mexican</a></li>
				
			</ul>			
		</div>
		<div class="ad ad-box block"></div>
	</div>
	<div class="main">
		<div class="episode white-box block">
			<ul class="unstyled episode-content">
				<li>
					<h2>Eps. 1: Mission Mexican, Season Premiere!, Below The Border</h2>
					<p>Keith, a former rock musician, is now the owner of a cool Mexican restaurant.  His menu, however, is not so hot.  To keep Keith in business, the Mission Menu Team travels to Mexico to find unique authentic dishes, including a one-of-a-kind dirt-baked tamale.  But will G and the Chefs' unusual take on Day of the Dead cuisine bring Keith's business back to life?</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-tall block"></div>
	</div>
EOCONTENT;

?>