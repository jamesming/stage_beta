<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Operation Osmin | nuvoTV Official Site</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="osmin, operation osmin, weight, weight loss, workout, personal trainer, training, extreme" />
<meta name="description" content="MYNUVOTV.COM celebrates the lives of bicultural Latinos through compelling comedy, reality, movies and extreme sports programming, including the first-ever Latina modeling competition, Model Latina, and the Latin pop culture comedy show Latino 101." />
<link rel="shortcut icon" href="/favicon.ico" />
 <meta property="og:site_name" content="MYNUVOTV.com"/>
<!-- <meta property="og:image" content="http://www.sitv.com/sites/all/themes/sitv/images/misc/sitv-logo.jpg"/> --> 

<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/style.css?<?= time(); ?>" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/david.css?<?= time(); ?>" />

<style type="text/css">
	h2	{clear:both;padding-top:20px;}
	ul {list-style:none;margin:0;padding:0;}
	li {float:left;width:100px;margin:0;padding:0;text-align:center;}
	li a {display:block;padding:5px 10px;height:100%;color:#FFF;text-decoration:none;border-right:1px solid #FFF;}
	li a {background:url(bg2.jpg) repeat 0 0;}
	li a:hover, li a:focus, li a:active {background-position:-150px 0;}
	#a a {background:url(bg.jpg) repeat -40px 70px;}
	#b a {background:url(bg2.jpg) repeat 0 0;}
	#c a {background:url(bg3.jpg) repeat 0 0;}
	#d a {background:url(bg4.jpg) repeat 0 0;}
</style>

<?

include('osmin_header.php');

$now = time();

$wed = strtotime("August 31, 2011 8:00am");

if($_GET[wed]) {
	$now = strtotime("August 31, 2011 8:01am");
}


if(time() % 4 == 3) {
	$vid_id = 1021472590001; 
} else if(time() % 3 == 2) {	
	$vid_id = 921410539001;
} else if(time() % 3 == 1) {
	$vid_id = 921409540001;
} else {
	$vid_id = 921409537001;
}

$vid_id = 1123682675001;

if($now > $wed) {
	$vid_id = 1049841204001;
}

?>
<div id="middle_block" style="float: left; height: 940px;">
	<div style="float: left; width: 733px;">
		<div style="float: left; font-size: 27px; font-weight: bold; color: #FFFFFF; height: 32px; width: 600px; padding-left: 10px; padding-top: 5px;">
			&nbsp;
		</div>
		<div class="slider-wrap">
		<div id="main-photo-slider" class="csw">

			<div class="panelContainer">


				<div class="panel" title="Panel 1">
					<div class="wrapper">
						<!-- <img src="images/centerpiece/face-lrg.png" alt="temp" /> -->
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
							  
							  <param name="@videoPlayer" value="<?= $vid_id ?>" />
							</object>
						</div>
						<div class="photo-meta-data">

						</div>
					</div>
				</div>
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
			<!-- <a href="#1" class="cross-link active-thumb" style="margin-bottom: 4px;"><img src="images/centerpiece/face-sml.png" class="nav-thumb" alt="temp-thumb" /></a> -->
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
					ATTENTION: #TeamOsmin
				</div>
				<div style="float: left; padding-left: 10px; width: 450px; height: 70px; margin-top: 6px;">
<?
	if($now > $wed) {
?>	
					<div style="float: left; padding-top: 8px;">
						<a target="_blank" href="http://www.cafepress.com/mynuvotv"><img src="images/small-OSMIN-STORE.png" /></a>
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold; padding-top: 5px;">
						<a style="color:#000000;" href="http://www.cafepress.com/mynuvotv">Get Your OSMIN Swag On!</a>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px; font-size: 13px;">
						Want to rock an Osmin-inspired T-shirt? Check out our nuvoTV online store for funny "Fich, Sala, Wada" tees and other Osminism paraphernalia. 
					</div>
<?	
	} else {
?>
					<div style="float: left; padding-top: 8px;">
						<a href="therecruits.php?recruit=9"><img src="images/small-CHRISTIAN.png" /></a>
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold; padding-top: 5px;">
						<a style="color:#000000;" href="therecruits.php?recruit=9">CHRISTIAN</a>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px; font-size: 13px;">
						After a knee injury, Christian, a college baseball star, had to give up life on the diamond.  His disappointment at not playing caused him to start overeating, so now he's not only out of shape, but overweight.  Will Osmin's over-the-top antics (including a visit from "Lil Osmin") get this former athlete back on the field? 
					</div>				
<?
	}
?>					
					
				<!-- <div style="float: left; padding-top: 28px;">
						<a href="casting.php"><img src="images/OSMIN-pic2.png" /></a>
					</div>
					<div style="float: left; padding-left: 15px; font-weight: bold; padding-top: 25px;">
						<a style="color:#000000;" href="casting.php">NOW CASTING FOR SEASON 2</a>
					</div>
					<div style="float: left; padding-left: 15px; width: 250px; font-size: 13px;">
						We're looking for charismatic, outgoing individuals in the Miami area who are up to the challenge.
					</div> -->

	
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