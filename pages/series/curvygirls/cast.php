<?
	$page->title = "Curvy Girls - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/CURVYgirls_SP.png) no-repeat 0 0; left:464px; top:150px; width:684px; height:138px;">
	</div>
EOHERO;


	$seriesBase = "curvygirls";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
			<!-- <li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>  -->
			<li class="season-nav"   style='display:none'  >
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
					<li class="active"><a href="/series/curvygirls">6</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">

				
				
				
				<li class="first block">
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Denise_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Denise</h3>
						</div>
						<p>You've seen this sexy single mom hyping major campaigns for fashion giants like Forever 21 and Torrid. But that's only the beginning for this gorgeous go-getter who is set on becoming the plus-size world's first supermodel. A prospective move from L.A. to NYC and custody issues with her overbearing ex, however, threaten to shake up her life like a salt shaker.  
						</p>
					</div>
				</li>
				
					<li class="last block">
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Lorna_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Lorna</h3>
						</div>
						<p>A contestant on nuvoTV's Model Latina Las Vegas, this New York-based beauty knows how to handle fierce competition. The ambitious model battled bulimia that sidelined her professional career in the mainstream only to later land her near the top in the world of plus-size modeling. But when a career move to L.A. threatens to tear apart her relationship with her New Yorker BF, she is forced to choose between true love and a shot at the good life.
						</p>
					</div>
				</li>	
				
				<li class="block">
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Rosie_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Rosie</h3>
						</div>
						<p>This twice divorcee leaves Vegas to take a gamble on love and L.A.'s modeling scene. The 340-pound full figured beauty strives to stay upbeat as she struggles with insecurity and insincerity while pursuing new romances and a better life for herself and her three kids, including a special needs child. She seems to have her besties' support, but just how sincere are they?
						</p>
					</div>
				</li>
				
				<li class="block">
					<img class="bordered media" 
					src="/assets/images/cast/curvygirls/Victoria_148x148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Victoria</h3>
						</div>
						<p>"Just 'cause I'm a plus-size model doesn't mean I can just sit at home and eat bon-bons. I have to work out," says the brash and beautiful Victoria, who is obsessed with having a perfectly toned plus-size physique. But a plastic surgery mishap that became a double-D nightmare and an unshakeable distrust of her competition, including her new BFFs, sets up a sordid scenario that always keeps things interesting in Victoria's world.
						</p>
					</div>
				</li>
							
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<!--<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Pastport" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>-->
	</div>
EOCONTENT;

?>