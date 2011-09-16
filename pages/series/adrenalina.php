<?
	$page->title = "Adrenalina | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-s2mb";
		
if(strpos($_SERVER['HTTP_USER_AGENT'],'iPhone') OR strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) {
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;

} else {
	$page->components["theme"]  = <<<EOTHEME
<style>
	.section-adrenalina .theme div { background: transparent url(/assets/images/heroes/series/_bg_Adrenalina2.jpg) no-repeat; }
	.stripe { background: transparent url(/assets/images/stripe_army4.png) no-repeat center top; position: relative; z-index: 2; -webkit-background-size: 2000px 1354px; }
</style>
		<div class="">

		</div>
EOTHEME;

}	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_Adrenalina_sh.png) no-repeat 0 0; left:407px; top:70px; width:419px; height:112px;">
	</div>
EOHERO;


	$seriesBase = "adrenalina";
	$schedule = getSchedule("adrenalina");
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="active first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="schedule block">
			<h2>Schedule</h2>
			$schedule
		</div>
		<div class="about white-box block">
			<h2>About</h2>
			<p>Join Pablo and Zalman for the most thrilling season of Adrenalina! Watch these daredevils as they take on exhilarating, albeit unconventional, sports, like cage diving with sharks in Hawaii. (Yes, you read that correctly!) Witness our mischievous hosts navigate their way through the picturesque cities in beautiful Argentina or snowboard down Chile's majestic and steep mountains. You'll also see how Pablo and Zalman unwind, be it by eating fire or (obviously) playing with iguanas. Warning your heart will want to run- not walk- to catch these partners-in-crime chase the ultimate adrenaline rushes! </p>
		</div>
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="featured white-box block">
			<h2>Pablo & Zalman Ring in the Money</h2>
			<img class="bordered media" src="/assets/images/featured/thumbs/adrenalina_nasdaq138x138.jpg" />
			<div class="copy">
				<p>Pablo and Zalman were invited to ring the closing bell at the world's largest exchange company, NASDAQ, in honor of Adrenalina's NYC Skateboard Marathon. Not bad for two dudes who live for life's biggest thrills. <a href="/series/adrenalina/features" class="no-break">Read More +</a></p>
			</div>
		</div>
		<div class="discussion white-box block">
			<h2>Discussion</h2>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="{$page->fullURL}" num_posts="4" width="420"></fb:comments>
		</div>
		<div class="cast padded-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Adrenalina/pabloThumb-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Pablo Lanatta</h3>
						</div>
						<p>A native of Argentine, Pablo started windsurfing when he was just 8 years old. Today, he's added skydiving, eating fire, and riding deadly waves to the list. It should come as no surprise that a guy this daring, is also certified as a rescue diver.&nbsp;<a href="/series/adrenalina/cast">[...]</a></p>
					</div>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Adrenalina/zalmanThumb-CAST_148X148.jpg" />
					<div class="copy">
						<div class="meta">
							<h3>Zalman Lekach</h3>
						</div>
						<p>Considering Zalman began skydiving in 2000, it's no small feat that he's completed over 1,500 jumps in the U.S. and Latin America. In 2005, the Latin American Association of Surfing awarded Zalman a ranking.&nbsp;<a href="/series/adrenalina/cast">[...]</a></p>
					</div>
				</li>
			</ul>
			<a class="sub-page-more" href="/series/adrenalina/cast">See the entire cast +</a>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="social block">
			<h2>Find Adrenalina on</h2>
			<ul class="inline">
				<li class="first"><a class="facebook" href="https://www.facebook.com/adrenalinashow">facebook</a></li>
				<li class="last"><a class="twitter" href="http://twitter.com/nuvoAdrenalina">twitter</a></li>
			</ul>			
		</div>
		<div class="facebook block">
			<fb:like-box href="https://www.facebook.com/adrenalinashow" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="photos block">
			<h2>Photos</h2>
			<div class="col">
				<img class="bordered" src="/assets/images/galleries/_Adrenalina/_thmbs/thmb_1.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Adrenalina/_thmbs/thmb_2.jpg" />
			</div>
			<div class="last col">
				<img class="bordered" src="/assets/images/galleries/_Adrenalina/_thmbs/thmb_3.jpg" />
				<img class="bordered" src="/assets/images/galleries/_Adrenalina/_thmbs/thmb_4.jpg" />
			</div>
			<a class="sub-page-more" href="/series/adrenalina/photos">See all photos +</a>
		</div>
	</div>
EOCONTENT;

?>