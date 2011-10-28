<?
	$page->title = "Pastport Colombia - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Colombia.png) no-repeat 0 0; left:348px; top:81px; width:574px; height:134px;">
		<a href="http://www.facebook.com/Pastport" style="left:282px; top:54px; width:217px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-colombia";
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
					<li><a href="/series/pastport-cuba">1</a></li>
					<li class="active"><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li><li><a href="/series/pastport-puerto-rico">5</a></li>
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
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/paula-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Paula Garces</h3>
						<strong>&ldquo;To my abuelita, I&rsquo;m not a true star until I&rsquo;ve done a novela.&rdquo; </strong>
					</div>
					<p>The super sexy starlet was born in New York, but feels &ldquo;completely Colombian.&rdquo; Her acting debut came in 1999 when she landed a role on Emmy Award-winning soap Guiding Light. Paula, 36, later appeared in shows The Shield, Law & Order SVU, CSI Miami, and films Harold & Kumar, and Clockstoppers to name a few. She and her husband created the very first Latina online gaming character, Aluna, for S2 Games' Heroes of Newerth. The budding producer is also co-creator, executive producer, and host of mun2&rsquo;s fashion-forward show The Look. Paula lives in New York with her husband.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/skye-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Skye</h3>
					</div>
					<p>Paula&rsquo;s 18-year-old daughter lives in Queens, New York and is a psychology major at St. John&rsquo;s University. She&rsquo;s anxious to meet her family in Colombia.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/tony-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Tony</h3>
					</div>
					<p>Paula&rsquo;s husband is Puerto Rican and grew up in New York. He&rsquo;s never been to Colombia.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/victoria-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Victoria</h3>
					</div>
					<p>Paula&rsquo;s Mom is a self-described &ldquo;hippie,&rdquo; who left Medellin, Colombia for New York in 1974 single and pregnant. After her second child was born she returned to Colombia. She lives in a hip part of Medellin called Zona Rosa, in an apartment Paula and her sister helped her get.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/gonzalo-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Gonzalo</h3>
					</div>
					<p>Paula&rsquo;s biological father is a 57-year-old artist who lives on a farm outside of Medellin with his girlfriend and 3-year-old daughter. An eccentric who does yoga daily, he&rsquo;s building a home out of recycled materials. Paula met Gonzalo for the first time when she was very young and never got the chance to build a relationship with him.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/jose-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Jose Mesa</h3>
					</div>
					<p>The closest thing to a father Paula has ever had, Jose was Victoria&rsquo;s boyfriend for a long time. He lives in a rural town called Tarso with his horses.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Pastport-Colombia/mauricio-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Mauricio</h3>
					</div>
					<p>Paula&rsquo;s older half brother is 39 and lives in Bogota with his wife and two kids. He&rsquo;s a successful banker in Bogota with a very happy family life. Paula&rsquo;s never met him and has never been to Bogota.</p>
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