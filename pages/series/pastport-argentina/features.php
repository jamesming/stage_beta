<?
	$page->title = "Pastport Argentina - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PastPort_Arg.png) no-repeat 0 0; left:331px; top:76px; width:645px; height:136px;">
		<a href="http://www.facebook.com/Pastport" style="left:297px; top:56px; width:218px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-argentina";
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
					<li><a href="/series/pastport-colombia">2</a></li>
					<li class="active"><a href="/series/pastport-argentina">3</a></li>
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
			<h2>Watch the Exclusive Pastport Argentina Webisode</h2>
			<img class="bordered media" src="/assets/images/featured/fb-490x340-pa_3-Features_458x248.jpg" />
			<p>Argentine American actor/voice-over star/all-around funnyman <strong>Carlos Alazraqui</strong> (<em>Reno 911!</em>, &quot;Yo Quiero Taco Bell&quot; voice) returned to his parents' homeland with his wife, mom, and one big secret: he's going to be a dad for the first time&mdash;at 48!</p>
			<p>Carlos got a lot out of his system in Argentina before settling down with bottles and bibs. He took a tango class with his wife, tried walking 21 dogs at a time, and suited up in full gaucho gear (trousers, scarf, beret, and all) to see if being a cowboy came natural to him. Find out if he succeeded at being the most Argentine man in the world. Check out the <a href="/schedule">schedule</a> for more info.</p>
			<p>
				<object height="300" width="460" id="flashObj" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0">
				<param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1" />
				<param name="bgcolor" value="#FFFFFF" />
				<param name="flashVars" value="@videoPlayer=943026616001&amp;playerID=18178083001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVvDUPiiCQ774F5olb1DR8Pw&amp;domain=embed&amp;dynamicStreaming=true" />
				<param name="base" value="http://admin.brightcove.com" />
				<param name="seamlesstabbing" value="false" />
				<param name="allowFullScreen" value="true" />
				<param name="swLiveConnect" value="true" />
				<param name="allowScriptAccess" value="always" /><embed height="300" width="460" src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1" bgcolor="#FFFFFF" flashvars="@videoPlayer=943026616001&amp;playerID=18178083001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVvDUPiiCQ774F5olb1DR8Pw&amp;domain=embed&amp;dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" seamlesstabbing="false" type="application/x-shockwave-flash" allowfullscreen="true" swliveconnect="true" allowscriptaccess="always" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>
			</p>
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