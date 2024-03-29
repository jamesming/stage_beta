<?
	$page->title = "Pastport Puerto Rico - Video | nuvoTV Official Site";
	$page->template = "standard";
	
	$page->bodyClasses[] = "layout-video";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_pastport-PR.png) no-repeat 0 0; left:344px; top:70px; width:684px; height:138px;">
		<a href="http://www.facebook.com/Pastport" style="left:285px; top:59px; width:217px; height:73px;">facebook</a>
	</div>
EOHERO;


	$seriesBase = "pastport-puerto-rico";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Episode:</span>
				<ul class="inline">
					<li><a href="/series/pastport-cuba">1</a></li>
					<li><a href="/series/pastport-colombia">2</a></li>
					<li><a href="/series/pastport-argentina">3</a></li>
					<li><a href="/series/pastport-venezuela">4</a></li>
					<li class="active"><a href="/series/pastport-puerto-rico">5</a></li><li><a href="/series/pastport-panama">6</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="player">
	
<!-- Start of Brightcove Player -->

<div style="display:none">
Pastport: Watch the drama unfold as she takes her boyfriend to her father's homeland. 
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
  <param name="playerID" value="1149507917001" />
  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVu3GOjlgm8YplKXx7KuNIHo" />
  <param name="isVid" value="true" />
  <param name="isUI" value="true" />
  <param name="dynamicStreaming" value="true" />
  <param name="wmode" value="transparent" />

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