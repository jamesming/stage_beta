<?
	$page->title = "In Living Color - Video | nuvoTV Official Site";
	$page->template = "standard";
	
	$page->bodyClasses[] = "layout-video";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_inLivingColor.png) no-repeat 0 0; left:395px; top:143px; width:451px; height:109px;">
	</div>
EOHERO;


	$seriesBase = "in-living-color";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/series/$seriesBase/video">Video</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="player">
		<!-- Start of Brightcove Player (single video) -->
		
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
		  <param name="height" value="450" />
		  <param name="playerID" value="929566596001" />
		  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtARWczHNzcyr0e6HXyj-t1" />
		  <param name="isVid" value="true" />
		  <param name="isUI" value="true" />
		  <param name="dynamicStreaming" value="true" />
		  <param name="@videoPlayer" value="1021397614001" />
		
		  
		</object>
		
		<!-- 
		This script tag will cause the Brightcove Player defined above it to be created as soon
		as the line is read by the browser. If you wish to have the player instantiated only after
		the rest of the HTML is processed and the page load is complete, remove the line, if you want to replace the video change the value of @videoPlayer" with a different id# from brightcove.
		-->
		<script type="text/javascript">brightcove.createExperiences();</script>
		
		<!-- End of Brightcove Player -->
	</div>
	
	<div class="ad ad-tall"></div>
	
	<div class="ad ad-box"></div>
	
	$featuredVideos


EOCONTENT;

?>