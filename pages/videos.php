<?
	$page->title = "Videos | nuvoTV Official Site";
	$page->template = "standard";
	
	$page->bodyClasses[] = "layout-video";
	
	$id = isset($_GET["id"]) ? trim($_GET["id"]) : "-1";
	
/*		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">
			<img src="/assets/images/heroes/series-pastport.jpg" style="margin-left:-700px" style="height:1388px; width:1400px;" />
		</div>
EOTHEME;
*/	
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/nu-videos.png" alt="Nu Videos" />
	</div>
EOHERO;

	if ($id == -1) {
		$page->components["content"] = <<<EOCONTENT
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
  <param name="width" value="802" />
  <param name="height" value="427" />
  <param name="playerID" value="54146186001" />
  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVu6mhtyaw4_eDJ9cgr1H0Nm" />
  <param name="isVid" value="true" />
  <param name="isUI" value="true" />
  <param name="dynamicStreaming" value="true" />
  <param name="wmode" value="transparent" />
  
</object>

<!--		
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
-->		
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
	} else {
		
		if($id == '969755272001') {
			$playerID = '1067871996001';
			$playerKey = 'AQ~~,AAAAADEdZAY~,VHcBVNPqDVuYcihZiWHpKvQYwbzOBP2C';
		} else if($id == '1041268796001') {
			$playerID = '1067871994001';
			$playerKey = 'AQ~~,AAAAADEdZAY~,VHcBVNPqDVveTomQSNcdH5TZRLCd77_F';
		} else if($id == '1101334377001') {
			$playerID = '1067871996001';
			$playerKey = 'AQ~~,AAAAADEdZAY~,VHcBVNPqDVuYcihZiWHpKvQYwbzOBP2C';
		} else {
			$playerID = '1067871994001';
			$playerKey = 'AQ~~,AAAAADEdZAY~,VHcBVNPqDVveTomQSNcdH5TZRLCd77_F';
		}
		
		$page->components["content"] = <<<EOCONTENT2
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
		  <param name="width" value="802" />
		  <param name="height" value="427" />
		  <param name="playerID" value="$playerID" />
		  <param name="playerKey" value="$playerKey" />
		  <param name="isVid" value="true" />
		  <param name="isUI" value="true" />
		  <param name="dynamicStreaming" value="true" />
		  <param name="wmode" value="transparent" />
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

EOCONTENT2;


	
	}
?>