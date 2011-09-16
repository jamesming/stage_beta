<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	<title>AnythingSlider | CSS-Tricks</title>

	<link rel="stylesheet" href="css/page.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/anythingslider.css" type="text/css" media="screen" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
	<script src="js/jquery.anythingslider.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript">

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
  playRtl             : true,     // If true, the slideshow will move right-to-left
  startText           : "Start",   // Start button text
  stopText            : "Stop",    // Stop button text
  delay               : 5000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
  animationTime       : 1000,       // How long the slideshow transition takes (in milliseconds)
  easing              : "swing"    // Anything other than "linear" or "swing" requires the easing plugin
});


			$("#slide-jump").click(function(){
				$('#slider2').anythingSlider(4);
				return false;
			});

		});
	</script>
</head>

<body>

		<style type="text/css" style="display: none;">.bsa_it_ad{border:0 !important;padding:6px !important;overflow:hidden !important;background:#eae3c0 !important;-moz-box-shadow:0 0 48px black;-webkit-box-shadow:0 0 48px black;box-shadow:0 0 48px black;}.bsa_it_ad a{margin:0 !important;padding:0 !important}.bsa_it_ad a img{border:0 !important;position:static !important}.bsa_it_ad a:hover img{margin:0 !important}.bsa_it_ad a:hover{background:none !important}.bsa_it_i{margin:0 15px 0 0 !important}.bsa_it_t{margin:12px 0 0 0 !important;font:16px Georgia,Serif !important}.bsa_it_d{font:11px Verdana,Helvetica,Arial,Sans-Serif;padding-right:10px}.bsa_it_p{display:none !important;}#bsap_aplink{position: absolute; color: #999; text-decoration: none; bottom:5px !important;right:5px !important;padding:0 !important}.bsa_it_p a:hover{background:none !important}</style><div id="hook-just-in-case" style="height: 77px; background: black url(/examples/images/examples-header-bg.png) repeat-x; color: white !important; font: 14px Georgia, Serif !important; position: relative; zoom: 1; width: 100% !important; z-index: 6000;"><div style="width: 960px; height: 77px; margin: 0 auto; position: relative;"><img src="/examples/images/example-logo.png" alt="Demo Page" style="position: absolute; top: 0; left: 0;" /><div style="position: absolute; left: 140px; top: 52px; width: 400px; text-align: left;"><a class='header-button' href='/anythingslider-jquery-plugin/'>&larr; Back to Article</a> &nbsp; <a class='header-button' href='/examples/'>More Demos &rarr;</a></div><div style="width: 420px; position: absolute; right: 0; top: 0;"><div id="bsap_1255488" class="bsarocks bsap_3469a2a501a9e18091036aa0c89f9dcb"></div><a href="http://adpacks.com" id="bsap_aplink">via Ad Packs</a></div></div></div>

	<div id="page-wrap">
		
			<!-- AnythingSlider #1 -->
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

				<li><img src="images/centerpiece/running-lrg.png" alt="temp" /></li>

				<li><img src="images/slide-civil-2.jpg" alt="" /></li>

				<li><img src="images/centerpiece/helicopter2-lrg.png" alt="temp" /></li>

			</ul>  <!-- END AnythingSlider #1 -->

			
		
</body>

</html>