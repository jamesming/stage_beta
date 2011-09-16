<?
	$page->title = "Adrenalina - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
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
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
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
					<img class="bordered media" src="/assets/images/cast/Adrenalina/pabloThumb-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Pablo Lanatta</h3>
					</div>
					<p>A native of Argentine, Pablo started windsurfing when he was just 8 years old. Today, he's added skydiving, eating fire, and riding deadly waves to the list. It should come as no surprise that a guy this daring, is also certified as a rescue diver. In 2001, he opened his first Adrenalina action sports store in Florida, the same year that Adrelina premiered nationally on television. Pablo lives in San Diego, California with his wife and two children.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Adrenalina/zalmanThumb-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Zalman Lekach</h3>
					</div>
					<p>Considering Zalman began skydiving in 2000, it's no small feat that he's completed over 1,500 jumps in the U.S. and Latin America. In 2005, the Latin American Association of Surfing awarded Zalman a ranking. When this Miami-bred (and now San Diego-based) professional skydiver isn't jumping out of airplanes, he's flying them. A licensed pilot, Zalman takes out both single and multi-engine planes. He's also known as one of the top aerial photographers of extreme sports. When not soaring above the cloud line, Zalman spins electronica as a DJ.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/adrenalinashow" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>