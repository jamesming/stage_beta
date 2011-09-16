<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Operation Osmin | nuvoTV Official Site</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="osmin, operation osmin, weight, weight loss, workout, personal trainer, training, extreme" />
<meta name="description" content="SITV.COM celebrates the lives of bicultural Latinos through compelling comedy, reality, movies and extreme sports programming, including the first-ever Latina modeling competition, Model Latina, and the Latin pop culture comedy show Latino 101." />
<link rel="shortcut icon" href="/favicon.ico" />
 <meta property="og:site_name" content="SiTV.com"/>
<!-- <meta property="og:image" content="http://www.sitv.com/sites/all/themes/sitv/images/misc/sitv-logo.jpg"/> --> 

<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/style.css?<?= time(); ?>" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/david.css?<?= time(); ?>" />

<style type="text/css">
div.anythingSlider {
	width: 700px;
	height: 390px;
	margin: 0 auto;
}

/****** SET COLORS HERE *******/
/* Default State */
div.anythingSlider .thumbNav a.cur, div.anythingSlider .thumbNav a {
	background: #777;
}
div.anythingSlider .anythingWindow {
	border-top: 3px solid #777;
	border-bottom: 3px solid #777;
}
/* Active State */
div.anythingSlider.activeSlider .thumbNav a.cur, div.anythingSlider.activeSlider .thumbNav a {
	background-color: #7C9127;
}
div.anythingSlider.activeSlider .anythingWindow {
	border-color: #7C9127;
}

/**** DO NOT CHANGE BELOW THIS LINE ****/
/* anythingSlider viewport window */
div.anythingSlider .anythingWindow {
	overflow: hidden;
	position: relative;
	width: 100%;
	height: 100%;
}
/* wrapper: 45px right & left padding for the arrows, 28px @ bottom for naviagation */
div.anythingSlider {
	position: relative;
	padding: 0 45px 28px 45px;
}
/* anythingSlider base UL */
ul.anythingBase {
	background: transparent;
	list-style: none;
	position: absolute;
	top: 0; left: 0;
	margin: 0;
}
ul.anythingBase li.panel {
	background: transparent;
	display: block;
	float: left;
	padding: 0;
	margin: 0;
}

/* Navigation Arrows */
div.anythingSlider .arrow {
	top: 50%;
	position: absolute;
	display: block;
}
div.anythingSlider .arrow a {
	display: block;
	height: 120px;
	margin-top: -60px;
	width: 45px;
	text-align: center;
	outline: 0;
	background: url(../images/arrows.png) no-repeat;
	text-indent: -9999px;
}
div.anythingSlider .forward { right: 0; }
div.anythingSlider .back { left: 0; }
div.anythingSlider .forward a { background-position: 0 -40px; }
div.anythingSlider .back a { background-position: -88px -40px; }
div.anythingSlider .forward a:hover, div.anythingSlider .forward a.hover { background-position: 0 -240px; }
div.anythingSlider .back a:hover, div.anythingSlider .back a.hover { background-position: -88px -240px; }

/* Navigation Links */
div.anythingSlider .thumbNav { margin: 0; }
div.anythingSlider .thumbNav li { display: inline; }
div.anythingSlider .thumbNav a {
	color: black;
	font: 11px/18px Georgia, Serif;
	display: inline-block;
	text-decoration: none;
	padding: 2px 8px;
	height: 18px;
	margin: 0 5px 0 0;
	background-image: url(../images/cellshade.png);
	background-repeat: repeat-x;
	text-align: center;
	outline: 0;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
div.anythingSlider .thumbNav a:hover { background-image: none; }

/* slider autoplay right-to-left, reverse order of nav links to look better */
div.anythingSlider.rtl .thumbNav a { float: right; } /* reverse order of nav links */
div.anythingSlider.rtl .thumbNav { float: left; }    /* move nav link group to left */
/* div.anythingSlider.rtl .start-stop { float: right; } */ /* move start/stop button - in case you want to switch sides */

/* Autoplay Start/Stop button */
div.anythingSlider .start-stop {
	z-index: 10;
	background: green url(../images/cellshade.png) repeat-x center top;
	color: white;
	padding: 2px 5px;
	width: 40px;
	text-align: center;
	text-decoration: none;
	float: right;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
div.anythingSlider .start-stop.playing { background-color: red; }
div.anythingSlider .start-stop:hover, div.anythingSlider .start-stop.hover { background-image: none; color: #ff0 }
</style>



<?

include('osmin_header.php');

?>

<script>
		$(function () {

$('#slider1').anythingSlider({
  // Appearance
  width               : null,      // Override the default CSS width
  height              : null,      // Override the default CSS height
  resizeContents      : true,      // If true, solitary images/objects in the panel will expand to fit the viewport

  // Navigation
  startPanel          : 1,         // This sets the initial panel
  hashTags            : true,      // Should links change the hashtag in the URL?
  buildArrows         : true,      // If true, builds the forwards and backwards buttons
  buildNavigation     : true,      // If true, buildsa list of anchor links to link to each panel
  navigationFormatter : null,      // Details at the top of the file on this use (advanced use)
  forwardText         : "&amp;raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image)
  backText            : "&amp;laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image)

  // Slideshow options
  autoPlay            : true,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
  startStopped        : false,     // If autoPlay is on, this can force it to start stopped
  pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
  resumeOnVideoEnd    : true,      // If true & the slideshow is active & a youtube video is playing, it will pause the autoplay until the video has completed
  stopAtEnd           : false,     // If true & the slideshow is active, the slideshow will stop on the last page
  playRtl             : false,     // If true, the slideshow will move right-to-left
  startText           : "Start",   // Start button text
  stopText            : "Stop",    // Stop button text
  delay               : 3000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
  animationTime       : 600,       // How long the slideshow transition takes (in milliseconds)
  easing              : "swing"    // Anything other than "linear" or "swing" requires the easing plugin
});

			$("#slide-jump").click(function(){
				$('#slider2').anythingSlider(4);
				return false;
			});

		});
</script>
 <script type="text/javascript" src="js/jquery.anythingslider.js"></script>
 <div id="middle_block" style="float: left; height: 940px;">
	<div style="float: left; width: 733px;">
		<div style="float: left; font-size: 27px; font-weight: bold; color: #FFFFFF; height: 32px; width: 600px; padding-left: 10px; padding-top: 5px;">
			&nbsp;
		</div>
		<ul id="slider1">

				<li><object id="myExperience921409540001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="615" />
							  <param name="height" value="347" />
							  <param name="playerID" value="929566596001" />
							  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtARWczHNzcyr0e6HXyj-t1" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="921409540001" />
							</object></li>

				<li><img src="images/centerpiece/flag-lrg.png" alt="temp" /></li>

				<li><img src="images/centerpiece/flag-lrg.png" alt="temp" /></li>

				<li><object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object></li>

				<li><object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/2Qj8PhxSnhg&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/2Qj8PhxSnhg&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object></li> 

			</ul>  <!-- END AnythingSlider #1 -->
		<div class="slider-wrap">
		<div id="main-photo-slider" class="csw">

			<div class="panelContainer">

				<!-- <div class="panel" title="Panel 1">
					<div class="wrapper">
						<div style="height: 400px; background: url('images/centerpiece/video-frame-v2.png') no-repeat scroll 0% 0 transparent; padding-top: 5px; padding-left: 7px;">
							<object id="myExperience921409540001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="615" />
							  <param name="height" value="347" />
							  <param name="playerID" value="929566596001" />
							  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtARWczHNzcyr0e6HXyj-t1" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="921409540001" />
							</object>
						</div>
						<div class="photo-meta-data">

						</div>
					</div>
				</div> -->
				<div class="panel" title="Panel 2">
					<div class="wrapper">
						<img src="images/centerpiece/flag-lrg.png" alt="temp" />
						<!-- <div class="jackcongusto-video"><object class="BrightcoveExperience" id="myExperience">
							<param value="#FFFFFF" name="bgcolor" />
							<param value="600" name="width" />
							<param value="420" name="height" />
							<param value="885305463001" name="playerID" />
							<param value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtlv0owRtgkFo7prIYMMRYV" name="playerKey" />
							<param value="true" name="isVid" />
							<param value="true" name="isUI" />
							<param value="true" name="dynamicStreaming" />    </object></div> -->
					</div> 
						
				</div>
		
				<div class="panel" title="Panel 3">
					<div class="wrapper">
						<img src="images/centerpiece/running-lrg.png" alt="temp" />
						
					</div>
				</div>
				<div class="panel" title="Panel 4">
					<div class="wrapper">
						<img src="images/centerpiece/helicopter2-lrg.png" alt="temp" />
						<div class="photo-meta-data">

						</div>
					</div>
				</div>
				<div class="panel" title="Panel 5">
					<div class="wrapper">
						<img src="images/centerpiece/beach-lrg.png" alt="temp" />
						
						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<!-- <div class="panel" title="Panel 6">
					<div class="wrapper">
						<img src="images/centerpiece/close-up-lrg.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div> -->
			</div>
		</div>
<script type="text/javascript">
var bcExp;
var modVP;
var modExp;
var modCon;

// called when template loads, this function stores a reference to the player and modules.
function onTemplateLoaded(experienceID) {

    bcExp = brightcove.getExperience(experienceID);

    modVP = bcExp.getModule(APIModules.VIDEO_PLAYER);
    modExp = bcExp.getModule(APIModules.EXPERIENCE);
    modCon = bcExp.getModule(APIModules.CONTENT);
	
	//modVP.mute(true);
}
</script>

			<a href="#1" class="cross-link active-thumb" style="margin-bottom: 4px;"><img onclick="modVP.stop();modVP.play();return false;" src="images/centerpiece/promo-vid-wht-sml.png" class="nav-thumb" alt="temp-thumb" /></a>
			<div id="movers-row" style="" >
				<div><a href="#2" class="cross-link"><img onclick="modVP.pause(true);return false;" src="images/centerpiece/flag-sml.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#3" class="cross-link"><img onclick="modVP.pause(true);return false;" src="images/centerpiece/running-sml.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#4" class="cross-link"><img onclick="modVP.pause(true);return false;" src="images/centerpiece/helicopter-sml.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#5" class="cross-link"><img onclick="modVP.pause(true);return false;" src="images/centerpiece/beach-sml.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<!-- <div style="width: 13%;"><a href="#6" class="cross-link"><img src="images/centerpiece/close-up-sml.png" class="nav-thumb" alt="temp-thumb" /></a></div> -->
			</div>

		</div>
		
		<div style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px;">	
			<div class="next_ep_container" style="float: left; width: 450px;" >
				<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 600px; padding-top: 25px;">
					GET SCARED FIT
				</div>
				<div class="next_ep_container" style="float: left; width: 580px; padding-top: 7px;" >
					Watch as psychotic trainer Osmin Hernandez puts 10 out-of-shape recruits through hell for 30 days with hardcore training, constant criticism, and a diet of fish, water, and salad. Blood and tears will be shed as they undergo the most difficult transformation of their lives.
				</div>
				<div style="float: left; font-size: 18px; font-weight: bold; height: 25px; width: 600px; padding-top: 40px;">
					ON THE PREMIERE OF OPERATION: OSMIN
				</div>
				<div style="float: left; padding-left: 10px; width: 450px; height: 70px; margin-top: 6px;">
					<div style="float: left; padding-top: 8px;">
						<a href="episodes.php"><img src="images/small-pic1.png" /></a>
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold; padding-top: 5px;">
						<a style="color:#000000;" href="episodes.php">PILOT</a>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px; font-size: 13px;">
						Osmin meets his first recruit, Joe, and quickly makes his life a living hell. At one point, they come close to blows!
					</div>
				</div>
				<!-- <div style="float: left; padding-left: 10px; width: 450px; height: 70px;">
					<div style="float: left;">
						<img src="images/small-pic2.png" />
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold;">
						<u>FEATURE 2</u>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px;">
						The compact. turbocharged sport cross, ideal for running any city.
					</div>
				</div>
				<div style="float: left; padding-left: 10px; width: 450px; height: 70px;">
					<div style="float: left;">
						<img src="images/small-pic3.png" />
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold;">
						<u>FEATURE 3</u>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px;">
						The compact. turbocharged sport cross, ideal for running any city.
					</div>
				</div> -->
			</div>
			
			
		</div>	
	</div>
	<div style="float: left; width: 255px; padding-top: 20px">
		<a href="/" target="_blank"><img src="images/nuvoTV-logo-OSMIN.png" width="268"/></a>
	</div>
	<div class="my-ad160x600" style="float: left; padding-top: 15px; margin-left: 105px; margin-top: 92px; background: url('images/vertical-banner-ad.png') no-repeat scroll 0% 0 transparent;">
		<script language="javascript">
		printAd(2,2)
		</script>
	</div>

</div>

<?

include('osmin_footer.php');

?>

</div>
</div>
</body>
</html>