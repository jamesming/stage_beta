<?
	$page->title = "Chicago Hope - Video | nuvoTV Official Site";
	$page->template = "standard";
	
	$page->bodyClasses[] = "layout-video";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_ChicagoHope.png) no-repeat 0 0; left:417px; top:194px; width:404px; height:45px;">
	</div>
EOHERO;


	$seriesBase = "chicago-hope";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="player">
		<!-- Start of Brightcove Player -->
		
		<div style="display:none">
		
		</div>
		
		<!--
		By use of this code snippet, I agree to the Brightcove Publisher T and C 
		found at https://accounts.brightcove.com/en/terms-and-conditions/. 
		-->
		
		<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
		
		<object id="myExperience" class="BrightcoveExperience">
		  <param name="bgcolor" value="#FFFFFF" />
		  <param name="width" value="800" />
		  <param name="height" value="427" />
		  <param name="playerID" value="54146186001" />
		  <param name="publisherID" value="824009734" />
		  <param name="isVid" value="true" />
		  <param name="wmode" value="transparent" />
		  <param name="isUI" value="true" />
		  <param name="dynamicStreaming" value="true" />	  
		</object>
		
		<!-- 
		This script tag will cause the Brightcove Players defined above it to be created as soon
		as the line is read by the browser. If you wish to have the player instantiated only after
		the rest of the HTML is processed and the page load is complete, remove the line.
		-->
		<script type="text/javascript">brightcove.createExperiences();</script>
		
		<!-- End of Brightcove Player -->
	</div>
	
	<div class="ad ad-tall"></div>
	
	<div class="ad ad-box"></div>
	
	$featuredVideos

EOCONTENT;

?>