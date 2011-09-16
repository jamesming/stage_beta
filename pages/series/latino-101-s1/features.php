<?
	$page->title = "Latino 101 Season 1 - Features | nuvoTV Official Site";
	
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background: transparent url(/assets/images/heroes/series/txt_Latino101_S1.png) no-repeat 0 0; height: 140px; left: 304px; top: 69px; width:616px;">
		<a href="http://www.facebook.com/Latino101" style="left:323px; top:60px; width:228px; height:74px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "latino-101-s1";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="active"><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li class="active"><a href="/series/latino-101-s1">1</a></li>
					<li><a href="/series/latino-101-s2">2</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="white-box block">
			<h2>Watch: Dr. Vicks VapoRub Cures All</h2>
			<img class="bordered media" src="/assets/images/featured/vicks-vapor-rub-Features_458x248.jpg" />
			<p>Momma knows best! You have a zit? Put Vicks VapoRub on it. You have a bad rash? Put Vicks VapoRub on it. You broke your arm? Put Vicks VapoRub on it! Well, we now know a quick visit to the doctor overrules Vicks VapoRub any day. Try to telling that to your mother. That's what we thought. Check out the other uses of Vicks VapoRub in the clip below.</p>
			<p><object height="382" width="460" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="flashObj">
			<param value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1" name="movie" />
			<param value="#FFFFFF" name="bgcolor" />
			<param value="@videoPlayer=79668860001&amp;playerID=18178083001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVvDUPiiCQ774F5olb1DR8Pw&amp;domain=embed&amp;dynamicStreaming=true" name="flashVars" />
			<param value="http://admin.brightcove.com" name="base" />
			<param value="false" name="seamlesstabbing" />
			<param value="true" name="allowFullScreen" />
			<param value="true" name="swLiveConnect" />
			<param value="always" name="allowScriptAccess" /><embed height="382" width="460" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" allowscriptaccess="always" swliveconnect="true" allowfullscreen="true" type="application/x-shockwave-flash" seamlesstabbing="false" name="flashObj" base="http://admin.brightcove.com" flashvars="@videoPlayer=79668860001&amp;playerID=18178083001&amp;playerKey=AQ~~,AAAAADEdZAY~,VHcBVNPqDVvDUPiiCQ774F5olb1DR8Pw&amp;domain=embed&amp;dynamicStreaming=true" bgcolor="#FFFFFF" src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1"></embed></object></p>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/Latino101" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>