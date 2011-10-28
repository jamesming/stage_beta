<?
	$page->title = "Pastport Colombia - Features | nuvoTV Official Site";
	
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
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
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
		<div class="white-box block">
			<h2>Actress Paula Garces Reunites With Her Dad</h2>
			<img class="bordered media" src="/assets/images/featured/hpfb_pastport_tunein-Features_458x248.jpg" />
			<p>Colombian American actress <a href="http://www.paulagarces.com/">Paula Garces</a> (<em>Harold &amp; Kumar</em>, <em>Clockstoppers</em>) is not your everyday Latina. Born in Manhattan to a free-loving hippie mother, who moved her and her sister back and forth from the big city of New York to the countryside of Colombia, it wasn&rsquo;t until later that she met her real father; a bittersweet moment that was short lived. <a href="http://www.sitv.com/pastport-colombia"><em>Pastport Colombia</em></a> follows her on an emotional journey back to her parent's homeland of Colombia to audition for a telenovela and reunite with her father&mdash;after 36 years!</p>
			<p>Get a sneak peek of them, below, taking a cooking class together at Medellin's famous <a href="http://www.arepamor.com/Portal/">Queareparaenamorarte</a> restaurant.</p>
			<p><object height="300" width="460" id="flashObj" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0">
			<param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&amp;isUI=1" />
			<param name="bgcolor" value="#FFFFFF" />
			<param name="flashVars" value="@videoPlayer=950974578001&amp;playerID=63890714001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVuv_CzGWWZJCapEPQhUS3k6&amp;domain=embed&amp;dynamicStreaming=true" />
			<param name="base" value="http://admin.brightcove.com" />
			<param name="seamlesstabbing" value="false" />
			<param name="allowFullScreen" value="true" />
			<param name="swLiveConnect" value="true" />
			<param name="allowScriptAccess" value="always" /><embed height="300" width="460" src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&amp;isUI=1" bgcolor="#FFFFFF" flashvars="@videoPlayer=950974578001&amp;playerID=63890714001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVuv_CzGWWZJCapEPQhUS3k6&amp;domain=embed&amp;dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" seamlesstabbing="false" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" swliveconnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object></p>
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