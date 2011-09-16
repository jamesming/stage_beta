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

		var slider2 = ['Recipe', 'Quote', 'Image', 'Quote #2', 'Image #2'];
		function formatText(index, panel) {
			return slider2[index - 1];
		}

		$(function () {

			$('#slider1').anythingSlider({
				width : 800,          // Override the default CSS width
				easing: 'easeInOutExpo'
			});

			$('#slider2').anythingSlider({
				width               : 600,       // if resizeContent is false, this is the default width if panel size is not defined
				height              : 350,       // if resizeContent is false, this is the default height if panel size is not defined
				resizeContents      : false,     // If true, solitary images/objects in the panel will expand to fit the viewport
				autoPlay            : false,     // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
				navigationFormatter : formatText // Format navigation labels with text
			})

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
		<a href="http://github.com/ProLoser/AnythingSlider/downloads" id="dl">Download Latest on Github</a>

		<h5>
			<a href="http://css-tricks.com/examples/AnythingSlider/">Original</a> By <a href="http://chriscoyier.net">Chris Coyier</a>, 
			based upon lots of smart stuff by <a href="http://remysharp.com/">Remy Sharp</a>, <br />

			significantly improved by <a href="http://dougneiner.com/">Douglas Neiner</a>, <br />
			improved again by <a href="http://github.com/ProLoser/">ProLoser</a> and <a href="http://github.com/Mottie/">Mottie</a>
		</h5>

		<h1>AnythingSlider</h1>

			<!-- AnythingSlider #1 -->
			<ul id="slider1">

				<li><img src="images/slide-civil-1.jpg" alt="" /></li>

				<li><img src="images/slide-env-1.jpg" alt="" /></li>

				<li><img src="images/slide-civil-2.jpg" alt="" /></li>

				<li><object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object></li>

				<li><object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/2Qj8PhxSnhg&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/2Qj8PhxSnhg&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object></li> 

				<li><img src="images/slide-env-2.jpg" alt="" /></li>

			</ul>  <!-- END AnythingSlider #1 -->

			<br><br>

			<!-- AnythingSlider #2 -->
			<ul id="slider2">

				<li class="panel1">
					<div id="textSlide">
						<img src="images/251356.jpg" alt="tomato sandwich" style="float: right; margin: 0 0 2px 10px;" />
						<h3>Queenie's Killer Tomato Bagel Sandwich</h3>
						<h4>Ingredients</h4>
						<ul>
							<li>1 bagel, split and toasted</li>

							<li>2 tablespoons cream cheese</li>
							<li>1 roma (plum) tomatoes, thinly sliced</li>
							<li>salt and pepper to taste</li>
							<li>4 leaves fresh basil</li>
						</ul>
					</div>
				</li>

				<li class="panel2">
					<div class="quoteSlide">
						<blockquote>In awe I watched the waxing moon ride across the zenith of the heavens like an ambered chariot towards the ebon void of infinite space wherein the tethered belts of Jupiter and Mars hang forever festooned in their orbital majesty. And as I looked at all this I thought... I must put a roof on this lavatory.<br>-- Les Dawson</blockquote>
					</div>
				</li>

				<li class="panel3">
					<img src="images/slide-tele-1.jpg" alt="" />

				</li>

				<li class="panel4">
					<div class="quoteSlide">
						<blockquote>Life is conversational. Web design should be the same way. On the web, you&#8217;re talking to someone you&#8217;ve probably never met – so it&#8217;s important to be clear and precise. Thus, well structured navigation and content organization goes hand in hand with having a good conversation.</blockquote>
						<p> - <a id='perma' href='http://quotesondesign.com/chikezie-ejiasi/'>Chikezie Ejiasi</a></p>

					</div>
				</li>

				<li class="panel5">
					<img src="images/slide-tele-2.jpg" alt="" />
				</li>

			</ul>  <!-- END AnythingSlider #2 -->

		<h2>Features</h2>

		<ul>
			<li>Panels are HTML Content (can be anything).</li>
			<li>Multiple AnythingSliders allowable per-page.</li>
			<li>Infinite/Continuous sliding (always slides in the direction you are going, even at "last" slide).</li>
			<li>Optionally resize each panel (specified per panel in css).</li>
			<li>Optional Next / Previous Panel Arrows.</li>

			<li>Use keyboard navigation or tabs that are built and added dynamically (any number of panels).</li>
			<li>Link to specific slides or go forward or back one slide from static text links - go to <a href="#" id="slide-jump">Slide 4</a> (Quote #2) in second example.</li>
			<li>Each panel has a hashtag (can link directly to specific panels).</li>
			<li>Optional custom function for <a href="#format">formatting navigation text</a>.</li>

			<li>Auto-playing slideshow (optional feature, can start playing or stopped)</li>
			<li>Pauses playing YouTube videos when not in view and resumes them when in view (only in non-IE browsers &amp; if files are hosted on the web).</li>
			<li>Pauses slideshow on hover (optional).</li>
			<li>Optionally play the slideshow once through, stopping on the last page.</li>
		</ul>

		<h2>Default Options</h2>
		<blockquote>
			<pre>$('#slider1, #slider2').anythingSlider({
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
});</pre>
		</blockquote>

		<h2>Usage</h2>
		<ul>
			<li><h3>Getting current slide number:</h3>
				<blockquote>
					<pre>var current = $('#slider1').data('AnythingSlider').currentPage; // returns page #</pre>
				</blockquote>
			</li>

			<li><h3>Setting current slide (external link example):</h3>
				<blockquote>
					<pre>&lt;a href="#" id="slide-jump"&gt;Slide 4&lt;/a&gt;</pre>
				<pre>$("#slide-jump").click(function(){
  $('#slider2').anythingSlider(4);
});</pre>
				</blockquote>
			</li>

			<li><h3>External Slideshow Control</h3>
				<blockquote>
					<pre>$('#slider1').data('AnythingSlider').startStop(true);  // start the slideshow
$('#slider2').data('AnythingSlider').startStop(false); // stops the slideshow
$('#slider1').data('AnythingSlider').goForward();      // go forward one slide
$('#slider1').data('AnythingSlider').goBack();         // go back one slide
</pre>
				</blockquote>
			</li>

			<li><h3><a id="format"></a>Formatting Navigation Text</h3>

				To use the <code>navigationFormatter</code> option, you must have a function that accepts two parameters, and returns a string of HTML text.<br>
				<br>
				<ul>
					<li><code>index</code> = integer index (1 based);</li>
					<li><code>panel</code> = jQuery wrapped LI item this tab references.</li>

					<li>Function must return a string of HTML/Text.</li>
					<li>Here is a sample formatter (view this page source for another example):<br>
						<br>
						<blockquote>
							<pre>$('#slider').anythingSlider({
 navigationFormatter : function(index, panel){
  return " Panel #" + index; // This would have each tab with the text 'Panel #X' where X = index
 }
})</pre>
						</blockquote></li>
				</ul>

			</li>
		</ul>

		<h2>Changelog</h2>
		<h3>Version 1.4</h3>
		<ul>
			<li>Added <code>maxOverallWidth</code> option. This sets the max width (in pixels) of all combined sliders (side-to-side) due to problems with Opera.</li>

			<li>Added new classes to the base UL ("anythingBase") and its immediate children LIs ("panels") to reduce and clarify the CSS.</li>
			<li>Added hover class to arrows and start/stop button to indicate the link has focus (while tabbing through the page)</li>
			<li>Fixed flickering problem completely :P - numerous changes made to script & CSS</li>
			<li>Bumped version to 1.4 because of significant differences from version 1.3</li>
		</ul>

		<h3>Version 1.3.7</h3>

		<ul>
			<li>Added <code>startPanel</code> option.</li>
			<li>Added <code>playRtl</code> option to reverse the play direction.</li>
			<li>Added back <code>stopAtEnd</code> option (it was added in a previous version).</li>

			<li>Added <code>resumeOnVideoEnd</code> option to prevent an active slideshow from pausing a video.</li>
			<li>Changed location of reverse reference from the wrapping div to the original ul - updated instructions (see Getting current slide; previously you had to reference <code>$('.anythingSlider:eq(0)')</code>.</li>
			<li>Fixed height/width options to accept strings (e.g. "400px" instead of a number, it may not work properly if values are other than the numnber of pixels).</li>
			<li>Fixed setting to accept strings (e.g. $(slider).anythingSlider(" 1 ")) as well as numbers.</li>

			<li>Fixed problem with objects (youtube videos) flickering in Firefox by setting <code>resizeContent</code> to false.</li>
			<li>Fixed problem that occurs when using an incorrect easing function name (<a href="http://dev.jquery.com/ticket/7064">submitted ticket</a>)</li>
			<li>Reorganized, cleaned up the code and updated the demos & instructions.</li>
		</ul>

		<h3>Version 1.3.6</h3>
		<ul>
			<li>Fixed minor bug with links to specific slides and updated example to reflect changes and be less confusing</li>
			<li>Tweaked start/stop button css to be more maleable</li>
		</ul>

		<h3>Version 1.3.5</h3>

		<ul>
			<li>Added resizePanel option - does not support percentage sizing.<br><br>
				<ul>
					<li>When true, it will resize all panels &amp; solitary content to the size settings (CSS or the script options).</li>
					<li>When false, the AnythingSlider wrapper will resize to fit the panel (set inline or in the CSS for each panel).</li>
				</ul>

			</li>
			<li>Fixed keyboard navigation to work with multiple AnythingSliders on a page.</li>
			<li>Added tabbed navigation. Both the links within panels and the thumbnail navigation will activate it.</li>
		</ul>

		<h3>Version 1.3.4</h3>
		<ul>
			<li>Added keyboard navigation</li>

			<li>Embeded objects will now resize to fit the panel</li>
			<li>YouTube videos will pause the video when it is not in view and play (if already started) when in view (in non-IE browsers)<br>
				*Note: this feature only works when the files are hosted on a webserver as the flash player restricts calls between local files and the internet.
			</li>
			<li>Modified code according to JSLint &amp; added minified version.</li>
		</ul>

		<h3>Version 1.3.3</h3>
		<ul>
			<li>Previous / Next arrows are now optional</li>
			<li>Clicking start button immediately begins transition instead of waiting for the delay</li>
		</ul>

		<h3>Version 1.3.2</h3>

		<ul>
			<li>Greatly refactored CSS for a more fluid resizing behavior</li>
			<li>Dimensions can be passed via javascript or modified at the top of the css file</li>
			<li>Merged all Github forks</li>
			<li>Wrapper DIVs (&lt;div class="anythingSlider"&gt;&lt;div class="wrapper"&gt;) no longer required in html. Divs are generated in jquery</li>

			<li>Improved CSS scope and classes, Javascript degredation is handled differently now however</li>
			<li>Greatly refactored CSS for a more fluid resizing behavior</li>
			<li>Hash URLS now work for multiple panels</li>
		</ul>

		<h3>Version 1.3</h3>
		<ul>

			<li>Accessibility improvements by Matt Lawson</li>
			<li>Some generic JavaScript/HTML/CSS code cleaning</li>
			<li>Moved to GitHub entirely</li>
			<li>Ensures unique panel ID's</li>
			<li>Removes navigation if there is only one panel</li>
			<li>Added option to stop on the last page when autoPlay is set to true</li>

		</ul>

		<h3>Version 1.2</h3>
		<ul>
			<li>Bug Fix: When autoPlay was set to false, any interaction with the control would cause a javascript error.</li>
		</ul>

		<h3>Version 1.1</h3>

		<ul>
			<li>Changed default easing to "swing" so didn't depend on any other plugins</li>
			<li>Removed extra junk (other plugins used for design, etc)</li>
			<li>Added Pause on Hover option</li>
			<li>Added options for passing in HTML for the start and stop button</li>
			<li>Added option to use custom function for formatting the titles of the navigation</li>

			<li>Added public interface for linking directly to certain slides</li>
		</ul>

		<h3>Version 1.0</h3>
		<ul>
			<li>First version</li>
		</ul>

	</div>
	
	<br class="ignore-code">
  
<style type="text/css" style="display: none;">.header-button{ border-top:1px solid #cf942d !important; border-bottom:0 !important; background:#964418 !important; background:-webkit-gradient(linear,left top,left bottom,from(#e86e36),to(#964418)) !important; background:-moz-linear-gradient(top,#e86e36,#964418) !important; padding:3px 10px !important; -webkit-border-radius:8px !important; -moz-border-radius:8px !important; border-radius:8px !important; -webkit-box-shadow:rgba(0,0,0,1) 0 1px 0 !important; -moz-box-shadow:rgba(0,0,0,1) 0 1px 0 !important; box-shadow:rgba(0,0,0,1) 0 1px 0 !important; text-shadow:rgba(0,0,0,.4) 0 1px 0 !important; color:white !important; font-size:13px !important; font-family:Georgia,serif !important; text-decoration:none !important; vertical-align:middle !important; display:inline !important; margin:0 !important;float:none !important}.header-button:hover{ border-top:1px solid #4f220d !important; background:#4f220d !important; color:#ccc !import
 ant; text-decoration:none !important; margin:0 !important}.header-button:active{ border-top:1px solid #261105 !important; background:#261105}.header-button:visited:before,.header-button:visited:after{ content:""!important}#source-code{z-index:7000;display:none;text-align:left;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.8)}#source-code:target{display:block}#source-code pre{padding:20px;font:14px/1.6 Monaco,Courier,MonoSpace;margin:50px auto;background:rgba(0,0,0,0.8);color:white;width:80%;height:80%;overflow:auto}#source-code pre a,#source-code pre a span{text-decoration:none;color:#0cf !important}#x{position:absolute;top:30px;left:10%;margin-left:-41px}#x img{border:0}.view-source-button{position:fixed;bottom:10px;right:10px;z-index:100}.str{color:#61ff74}.kwd{color:white}.com{color:white}.typ{color:#f1915d}.lit{color:white}.pun{color:white}.pln{color:#ffef97}.tag{color:#ffab58}.atn{color:#fabb4e}.atv{color:#ffd996}.dec{color:red}</style>
   <div id="source-code"><a href="#" id="x"><img src="http://css-tricks.com/examples/ViewSourceButton/images/x.png" alt="close"></a></div>
   <a class="view-source-button header-button" href="#source-code" id="view-source">Fancy View Source</a>
   <script type="text/javascript" src="/prettify/prettify.js"></script><script>if(typeof jQuery=='undefined'){function getScript(url,success){var script=document.createElement('script');script.src=url;var head=document.getElementsByTagName('head')[0],done=false;script.onload=script.onreadystatechange=function(){if(!done&&(!this.readyState||this.readyState=='loaded'||this.readyState=='complete')){done=true;success();script.onload=script.onreadystatechange=null;head.removeChild(script)}};head.appendChild(script)};getScript('http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js',function(){
   if(typeof jQuery=='undefined'){}else{fancyCode()}})}else{fancyCode()}
   function fancyCode(){ var code = '&lt;!DOCTYPE html>\n&lt;html>\n' + $("html").html().replace(/[<>]/g, function(m){return{'<':'&lt;','>':'&gt;'}[m]}).replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>');
     code = code.substring(0, code.indexOf('br class="ignore-code"') - 4) + '\n&lt;/body>\n\n&lt;/html>'; $("<pre />",{"html" : code,"class":"prettyprint"}).appendTo("#source-code"); prettyPrint()}</script>
   

<script type="text/javascript">(function(){ var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = '//s3.buysellads.com/ac/bsa.js'; (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa); })();</script>

<script type="text/javascript">var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();</script>

</body>

</html>