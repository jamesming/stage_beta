<?
	$page->title = "Pastport Cuba - Cast | nuvoTV Official Site";
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
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
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
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/nicole-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Nicole Di Rocco</h3>
					</div>
					<p>&ldquo;I delivered my first design to a girl in the dorms. She looked at my logo and was like, &lsquo;Nicolita? That sounds so Latin. People aren&rsquo;t going to like that.&rsquo; That&rsquo;s when I knew it was the name of my line.&rdquo;</p>
					<p>Like most kids, Nicole, 30, just wanted to fit in. She grew up in Irvine, an affluent neighborhood where it wasn&rsquo;t cool to be different. She begged her mom not to speak Spanish when her friends were around, and it wasn&rsquo;t until college that she started to embrace her roots. After getting a business degree from USC, Nicole launched Nicolita with curvy women and the allure of 1940s Cuba as her inspiration. Her signature &ldquo;no-pinch fit&rdquo; bottoms offer more coverage on the hips and a heart-shaped backside to boast. She recently debuted her new line, Caliente, at Mercedes-Benz Fashion Week.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/mother-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Nicole&rsquo;s Mother</h3>
					</div>
					<p>Thais Sainz, 64, was pushed at a very young age to succeed. Born in Havana, Cuba to an architect father who moonlighted as a professor, Thais was sent to a boarding school in Texas at 14. She dedicated her life to education, earning two undergraduate degrees and a master&rsquo;s from Pepperdine. For 38 years, she worked as a teacher, college administrator, and grant writer. She met her husband, Xavier, while dancing at a Brazilian festival at UCLA. Now retired, she enjoys reading, dancing, and playing with her granddaughter Zoey Rose.</p>
					<p>&ldquo;Children are the love of my life. If I&rsquo;ve sparked an interest in learning in just one, I&rsquo;ve succeeded.&rdquo;</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/father-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Nicole&rsquo;s Father</h3>
					</div>
					<p>Xavier Sainz was born in Holguin, Cuba in 1942 to a family of sugar cane and cattle farmers. He moved to Illinois when Castro came into power and got drafted into the Vietnam War soon after. In 1966, he was honorably discharged and moved to Los Angeles, where he met the &ldquo;love of his life.&rdquo; He has a master&rsquo;s degree in business administration and corporate real estate, and works as a senior financial broker.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/sister-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Nicole&rsquo;s Sister</h3>
					</div>
					<p>Michelle Sainz Maginnis, 35, was born in Torrance, CA and was always the artsy girl in class. She received a bachelor&rsquo;s in advertising (with a minor in art) and for 10 years worked as an award-winning graphic designer and art director. She met her husband Kevin, who&rsquo;s also an artist, on Match.com and the two married in Puerto Rico. She lives in Irvine, where she works from home as a freelance graphic designer, with her 8-month-old daughter Zoey Rose.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Cuba/dayli-padron-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Nicolita</h3>
					</div>
					<p>Dayli Padron, 18, has been modeling with La Maison since she was 16. A native Cubana, she says her positive attitude helps her get modeling gigs.</p>
					<p>&ldquo;I started modeling with La Maison when I was 16. I like the lifestyle. It relaxes me, takes away my stresses, and makes me happy.&rdquo;</p>
				</li>
			</ul>
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