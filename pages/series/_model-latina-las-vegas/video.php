<?
	$page->template = "standard";
	
	$page->bodyClasses[] = "layout-video";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO

EOHERO;


	$seriesBase = "model-latina-las-vegas";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li><a href="/series/$seriesBase/cast">Cast</a></li>
			<li class="active"><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
			<li class="season-nav">
				<span>Season:</span>
				<ul class="inline">
					<li><a href="/series/model-latina-la">1</a></li>
					<li><a href="/series/model-latina-miami">2</a></li>
					<li><a href="/series/model-latina-nyc">3</a></li>
					<li class="active"><a href="/model-latina-las-vegas/">4</a></li>
				</ul>
			</li>
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
	
	<div class="featured-videos">
		<h2>Most Popular Videos</h2>
		<ul class="unstyled">
			<li class="first block">
				<img class="bordered media" src="http://placehold.it/133x88" />
				<div class="copy">
					<h3>Video Title One</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mi dolor, in egestas mauris. Morbi orci urna, hendrerit eu rutrum vitae, rhoncus sodales.</p>
				</div>
			</li>
			<li class="last block">
				<img class="bordered media" src="http://placehold.it/133x88" />
				<div class="copy">
					<h3>Video Title One</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mi dolor, in egestas mauris. Morbi orci urna, hendrerit eu rutrum vitae, rhoncus sodales.</p>
				</div>
			</li>
		</ul>
	
	</div>

EOCONTENT;

?>