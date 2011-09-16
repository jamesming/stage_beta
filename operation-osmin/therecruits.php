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

</style>

<?

require_once($_SERVER["DOCUMENT_ROOT"] ."/includes/components.php");
require_once($_SERVER["DOCUMENT_ROOT"] ."/includes/page.php");

echo $schedule = getSchedule("in-living-color");

	
include('osmin_header.php');

$now = time();

$wed = strtotime("August 31, 2011 8:00am");

if($_GET[wed]) {
	$now = strtotime("August 31, 2011 8:01am");
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
						<img src="images/centerpiece/recruits_done.png" alt="temp" />
						<div class="photo-meta-data">

						</div>
					</div>
				</div>
				<div class="panel" title="Panel 2">
					<div class="wrapper">
						<img src="images/centerpiece/recruits_done.png" alt="temp" />
					</div> 
						
				</div>
		
				<div class="panel" title="Panel 3">
					<div class="wrapper">
						<img src="images/centerpiece/recruits_done.png" alt="temp" />

					</div>
				</div>
				<div class="panel" title="Panel 4">
					<div class="wrapper">
						<img src="images/centerpiece/recruits_done.png" alt="temp" />
						<div class="photo-meta-data">

						</div>
					</div>
				</div>
				<div class="panel" title="Panel 5">
					<div class="wrapper">
						<img src="images/centerpiece/recruits_done.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 6">
					<div class="wrapper">
						<img src="images/centerpiece/joe-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 7">
					<div class="wrapper">
						<img src="images/centerpiece/biankha-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 8">
					<div class="wrapper">
						<img src="images/centerpiece/willy-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 9">
					<div class="wrapper">
						<img src="images/centerpiece/KHALIA-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 10">
					<div class="wrapper">
						<img src="images/centerpiece/ADRIANA-lrg3.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 11">
					<div class="wrapper">
						<img src="images/centerpiece/DREW-lrg3.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 12">
					<div class="wrapper">
						<img src="images/centerpiece/DOMINA-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 13">
					<div class="wrapper">
						<img src="images/centerpiece/LOUISA-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 14">
					<div class="wrapper">
						<img src="images/centerpiece/CHRISTIAN-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
				<div class="panel" title="Panel 15">
					<div class="wrapper">
						<img src="images/centerpiece/ADAM-lrg2.png" alt="temp" />

						<div class="photo-meta-data">
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="display: none;"><a href="#6" class="cross-link active-thumb" style="margin-bottom: 4px;"><img id="thumb_1" src="images/centerpiece/joe-thmb.png" class="nav-thumb" alt="temp-thumb" /></a>
			<div id="movers-row">
				<div><a href="#7" class="cross-link"><img id="thumb_2" src="images/centerpiece/biankha-thmb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#8" class="cross-link"><img id="thumb_3" src="images/centerpiece/willy-thmb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			</div>
		</div>	

<?
	if($now > $wed) {
		echo '				<a href="#9" class="cross-link active-thumb" style="margin-bottom: 4px;"><img id="thumb_4" src="images/centerpiece/KHALIA-thumb.png" class="nav-thumb" alt="temp-thumb" /></a>
			<div id="movers-row">
			';
	} else {
		echo '				<a href="#8" class="cross-link"><img id="thumb_3" src="images/centerpiece/willy-thmb.png" class="nav-thumb" alt="temp-thumb" /></a>
			<div id="movers-row">
				<div><a href="#9" class="cross-link active-thumb" style="margin-bottom: 4px;"><img id="thumb_4" src="images/centerpiece/KHALIA-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
			';
	}
?>
				<div><a href="#10" class="cross-link"><img id="thumb_5" src="images/centerpiece/ADRIANA-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#11" class="cross-link"><img id="thumb_6" src="images/centerpiece/DREW-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#12" class="cross-link"><img id="thumb_7" src="images/centerpiece/DOMINA-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#13" class="cross-link"><img id="thumb_8" src="images/centerpiece/LOUISA-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
				<div><a href="#14" class="cross-link"><img id="thumb_9" src="images/centerpiece/CHRISTIAN-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>
<?
	if($now > $wed) {
		echo '				<div><a href="#15" class="cross-link"><img id="thumb_10" src="images/centerpiece/ADAM-thumb.png" class="nav-thumb" alt="temp-thumb" /></a></div>';
	}
?>	
			</div>

		</div>
		<div id="recruit_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 600px; padding-top: 25px;">
				MEET OSMIN'S RECRUITS
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 20px;" >
				They're everyday people like you and me except for the next 30 days they'll undergo Osmin's constant interrogation, hardcore workouts, and a diet of fish, water, and salad. Blood and tears will be shed as they leave their health in the hands of Osmin. Can they trust this psychotic trainer?
 			</div>
			<div class="next_ep_container" style="float: left; width: 700px; padding-top: 20px;" >
				<b>Find out if Osmin's recruits can hang.</b>
			</div>
			<div class="next_ep_container" style="float: left; width: 200px; padding-top: 20px; color: black; font-weight: bold;" >
				1. <a href="#6" class="black_link" id="text_1" style="color: black; font-weight: bold;">JOE</a><br />
				<br />
				2. <a href="#7" class="black_link" id="text_2" style="color: black; font-weight: bold;">BIANKHA</a><br />
				<br />
				3. <a href="#8" class="black_link" id="text_3" style="color: black; font-weight: bold;">WILLY</a><br />
				<br />
				4. <a href="#9" class="black_link" id="text_4" style="color: black; font-weight: bold;">KHALIA</a><br />
				<br />
				5. <a href="#10" class="black_link" id="text_5" style="color: black; font-weight: bold;">ADRIANA</a><br />
				<br />
			</div>
			<div class="next_ep_container" style="float: left; width: 200px; padding-top: 20px; color: black; font-weight: bold;" >
				6. <a href="#11" class="black_link" id="text_6" style="color: black; font-weight: bold;">DREW</a><br />
				<br />
				7. <a href="#12" class="black_link" id="text_7" style="color: black; font-weight: bold;">DOMINA</a><br />
				<br />
				8. <a href="#13" class="black_link" id="text_8" style="color: black; font-weight: bold;">LOUISA</a><br />
				<br />
				9. <a href="#14" class="black_link" id="text_9" style="color: black; font-weight: bold;">CHRISTIAN</a><br />
<?
	if($now > $wed) {
		echo '<br />
				10. <a href="#15" class="black_link" id="text_10" style="color: black; font-weight: bold;">ADAM</a><br />';
	}
?>	
			</div>	
		</div>
		<div id="joe_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				JOE
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="joe-bna">
					<div><img alt="before" src="images/recruits/joe-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/joe-after.jpg" width="195" height="369" /></div>
				</div>				</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">This happily married businessman owns a health food catering company, but doesn't practice what he preaches. He blames his Cuban upcoming for his excess weight. Like many of us, Joe was raised to polish off everything on his plate and today, has a sweet tooth he just can't shake. He's gone as far as sneaking out of bed in the middle of the night to go on ice cream runs and hoards cupcakes in his desk at work.</span>
				<span style="float: left; padding-top: 10px; width: 300px;">He spends loads of money on health clubs and personal trainers, but hasn't shed the extra 30 pounds that hang on him like a bad omen&mdash;until he meets Osmin! Does this successful family man have the <i>cajones</i> to handle a psychotic fitness trainer?</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/joe-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_joe]"><img src="images/recruits/joe-gallery-1-thmb.png" /></a>
					<a href="images/recruits/joe-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_joe]"><img src="images/recruits/joe-gallery-2-thmb.png" /></a>
					<a href="images/recruits/joe-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_joe]"><img src="images/recruits/joe-gallery-3-thmb.png" /></a>
					<a href="images/recruits/joe-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_joe]"><img src="images/recruits/joe-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="biankha_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				BIANKHA
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="biankha-bna">
					<div><img alt="before" src="images/recruits/biankha-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/biankha-after.jpg" width="195" height="369" /></div>
				</div>			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Biankha, 22, is a curvy cubana who uses food to cope with depression, anxiety and her many fears, including being stuck in small spaces. She desperately wants to go out with her friends, be in a relationship, and feel good about herself, but the extra 40 pounds she carries keep her on the couch. She chooses water and laxatives over working out&mdash;until Osmin recruits her for an extreme transformation.</span>
				<span style="float: left; padding-top: 10px; width: 300px;">Biankha has no choice but to conquer her claustrophobia, ride a bike for the first time, and change her life forever. Osmin forces her out of her comfort level by taking away her car, replacing her couch with a hard wooden chair, and making her run in a nylon bag.</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/biankha-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_biankha]"><img src="images/recruits/biankha-gallery-1-thmb.png" /></a>
					<a href="images/recruits/biankha-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_biankha]"><img src="images/recruits/biankha-gallery-2-thmb.png" /></a>
					<a href="images/recruits/biankha-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_biankha]"><img src="images/recruits/biankha-gallery-3-thmb.png" /></a>
					<a href="images/recruits/biankha-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_biankha]"><img src="images/recruits/biankha-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="willy_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				WILLY
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="willy-bna">
					<div><img alt="before" src="images/recruits/willy-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/willy-after.jpg" width="195" height="369" /></div>
				</div>			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Willy is a 35-year-old Cuban refugee who came to the U.S. during the 1980 Mariel boatlift, and joined the navy after high school. His health started deteriorating when he was stationed in Italy and began drinking heavily and binging on junk food. Willy lost all sense of self-control, and was eventually kicked out of the military for smoking weed.</span>
				<span style="float: left; padding-top: 10px; width: 400px;">Although he doesn't drink excessively anymore, Willy has traded one bad habit for another. His girlfriend's cakes and cupcakes are Willy's weakness, and he's been known to polish off a whole cake by himself. He's now 30 pounds overweight and highly insecure of his man boobs. His days of surfing and playing basketball are over&mdash;until he meets Osmin. Willy is about to endure the hardest 30 days of his life, and when Osmin forces him to be tied to the back of a truck and run for his life, he questions if he made the right decision.</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/willy-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_willy]"><img src="images/recruits/willy-gallery-1-thmb.png" /></a>
					<a href="images/recruits/willy-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_willy]"><img src="images/recruits/willy-gallery-2-thmb.png" /></a>
					<a href="images/recruits/willy-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_willy]"><img src="images/recruits/willy-gallery-3-thmb.png" /></a>
					<a href="images/recruits/willy-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_willy]"><img src="images/recruits/willy-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="khalia_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				KHALIA
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="khalia-bna">
					<div><img alt="before" src="images/recruits/khalia-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/khalia-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Khalia is young and beautiful, but has a hard time shopping for clothes that fit her curvaceous body. She has to squeeze into all of her outfits, which has made her super self-conscious&mdash;especially around men. She's become severely depressed and starts doing everything from bed, including working and eating lots of cheese. Khalia's completely out of touch with reality and doesn't even own a watch!</span>
				<span style="float: left; padding-top: 10px; width: 400px;">She gets a rude awakening when she finally gets out of bed to see a doctor: this sedentary lifestyle will eventually kill her! She enlists Osmin to whip her into shape, but didn't think he'd take it literally. Osmin demands she stop crying like a baby and get healthy now! In seconds, she's paddle boarding, dancing with heavy weights, and facing her worst fear&mdash;running on the beach in a bikini! Khalia is truly tested on how much she wants to be fit, and Osmin uses the same I-don't-give-a-%$#@ method, which leads to them almost going to jail for trespassing.</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/KHALIA-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_KHALIA]"><img src="images/recruits/KHALIA-gallery-1-thmb.png" /></a>
					<a href="images/recruits/KHALIA-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_KHALIA]"><img src="images/recruits/KHALIA-gallery-2-thmb.png" /></a>
					<a href="images/recruits/KHALIA-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_KHALIA]"><img src="images/recruits/KHALIA-gallery-3-thmb.png" /></a>
					<a href="images/recruits/KHALIA-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_KHALIA]"><img src="images/recruits/KHALIA-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="adriana_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				ADRIANA
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="adriana-bna">
					<div><img alt="before" src="images/recruits/adriana-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/adriana-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Don't let this Brazilian bombshell's body fool you. The star of The Real Housewives of Miami is all flab! (Her words, not ours.) The art dealer/fulltime mom desperately needs to tone in order to maintain her celebrity status and compete in the entertainment industry. Adriana's not very active in her everyday life, but all that changes when her fianc&eacute;, who trains with Osmin, enlists her for the hardest 30 days of her life!</span>
				<span style="float: left; padding-top: 10px; width: 300px;">Osmin doesn't tolerate Adriana's laziness. He uses some of the most bizarre training methods on the Sao Paolo native, including sweeping streets! She not only forgets the gym rut she's in, but soon starts to see the fruits of her labor.</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/ADRIANA-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_ADRIANA]"><img src="images/recruits/ADRIANA-gallery-1-thmb.png" /></a>
					<a href="images/recruits/ADRIANA-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_ADRIANA]"><img src="images/recruits/ADRIANA-gallery-2-thmb.png" /></a>
					<a href="images/recruits/ADRIANA-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_ADRIANA]"><img src="images/recruits/ADRIANA-gallery-3-thmb.png" /></a>
					<a href="images/recruits/ADRIANA-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_ADRIANA]"><img src="images/recruits/ADRIANA-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>		
		<div id="drew_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				DREW
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="drew-bna">
					<div><img alt="before" src="images/recruits/drew-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/drew-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Drew's heart and soul is basketball, though he's never been in good enough shape to make it as a pro (probably due to his love for potato chips).  Osmin's punishing regime-including punching and dragging heavy bags of potatoes-almost pushed Drew to the edge as paramedics are called to the scene and he gets scary news from his doctors!</span>
				<span style="float: left; padding-top: 10px; width: 300px;"></span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/DREW-gallery-1-lrg.jpg" rel="prettyPhoto[gallery_DREW]"><img src="images/recruits/DREW-gallery-1-thmb.png" /></a>
					<a href="images/recruits/DREW-gallery-2-lrg.jpg" rel="prettyPhoto[gallery_DREW]"><img src="images/recruits/DREW-gallery-2-thmb.png" /></a>
					<a href="images/recruits/DREW-gallery-3-lrg.jpg" rel="prettyPhoto[gallery_DREW]"><img src="images/recruits/DREW-gallery-3-thmb.png" /></a>
					<a href="images/recruits/DREW-gallery-4-lrg.jpg" rel="prettyPhoto[gallery_DREW]"><img src="images/recruits/DREW-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="domina_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				DOMINA
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="domina-bna">
					<div><img alt="before" src="images/recruits/domina-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/domina-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">This Italian Stallion desperately wants to trim her rear end and be in better shape than her mom, but it's her way or the highway. Osmin's not having it! Will this difficult diva be the first to fall off, or will Osmin show her some mercy?</span>
				<span style="float: left; padding-top: 10px; width: 300px;"></span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/DOMINA-gallery-1-lrg.png" rel="prettyPhoto[gallery_DOMINA]"><img src="images/recruits/DOMINA-gallery-1-thmb.png" /></a>
					<a href="images/recruits/DOMINA-gallery-2-lrg.png" rel="prettyPhoto[gallery_DOMINA]"><img src="images/recruits/DOMINA-gallery-2-thmb.png" /></a>
					<a href="images/recruits/DOMINA-gallery-3-lrg.png" rel="prettyPhoto[gallery_DOMINA]"><img src="images/recruits/DOMINA-gallery-3-thmb.png" /></a>
					<a href="images/recruits/DOMINA-gallery-4-lrg.png" rel="prettyPhoto[gallery_DOMINA]"><img src="images/recruits/DOMINA-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="louisa_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				LOUISA
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="louisa-bna">
					<div><img alt="before" src="images/recruits/louisa-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/louisa-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Louisa is a social worker and part-time professor who's tired of hearing she has a "pretty face." Guys tell her she's pretty, but rarely ask her out.  Louisa's constantly surrounded by very fit people, and being a single mom, finds it hard to meet men. Although she recently lost 60 pounds, she still has a long way to go.</span>
				<span style="float: left; padding-top: 10px; width: 300px;">Enter Osmin who quickly has her take it up a notch.  Louisa will be running football fields (and then mowing them with an old fashion lawn mower)and chasing cars in the street. Will 30 days of this baneful boot camp be enough for her to finally fit into her denim cat suit?</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/LOUISA-gallery-lrg-1.jpg" rel="prettyPhoto[gallery_LOUISA]"><img src="images/recruits/LOUISA-gallery-1-thmb.png" /></a>
					<a href="images/recruits/LOUISA-gallery-lrg-2.jpg" rel="prettyPhoto[gallery_LOUISA]"><img src="images/recruits/LOUISA-gallery-2-thmb.png" /></a>
					<a href="images/recruits/LOUISA-gallery-lrg-3.jpg" rel="prettyPhoto[gallery_LOUISA]"><img src="images/recruits/LOUISA-gallery-3-thmb.png" /></a>
					<a href="images/recruits/LOUISA-gallery-lrg-4.jpg" rel="prettyPhoto[gallery_LOUISA]"><img src="images/recruits/LOUISA-gallery-4-thmb.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="christian_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				CHRISTIAN
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<div id="christian-bna">
					<div><img alt="before" src="images/recruits/CHRISTIAN-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/CHRISTIAN-after.jpg" width="195" height="369" /></div>
				</div>
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Christian's passion is baseball. His father was a professional player, who he idolized growing up, but it wasn't until later that he realized pops wasn't exactly a role model. It's been a tough pill to swallow, especially since his parents recently divorced, and Christian's turned to food to cope.</span>
				<span style="float: left; padding-top: 10px; width: 300px;">He played baseball in college, but when he injured his knee and his grades began to slip, Christian had to give up the sport and drop out of school. He became severely depressed and started overeating. Now, he desperately wants to return to baseball, but has to drop some pounds first. He needs Osmin to whip him into shape and help him achieve his goal of going back to school to play ball. Christian believes he can handle anything Osmin throws at him, but what he doesn't know is that Osmin will literally throw things at him!</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/CHRISTIAN_GALLERY_LRG_1.jpg" rel="prettyPhoto[gallery_CHRISTIAN]"><img src="images/recruits/CHRISTIAN_GALLERY_THUMB_1.png" /></a>
					<a href="images/recruits/CHRISTIAN_GALLERY_LRG_2.jpg" rel="prettyPhoto[gallery_CHRISTIAN]"><img src="images/recruits/CHRISTIAN_GALLERY_THUMB_2.png" /></a>
					<a href="images/recruits/CHRISTIAN_GALLERY_LRG_3.jpg" rel="prettyPhoto[gallery_CHRISTIAN]"><img src="images/recruits/CHRISTIAN_GALLERY_THUMB_3.png" /></a>
					<a href="images/recruits/CHRISTIAN_GALLERY_LRG_4.jpg" rel="prettyPhoto[gallery_CHRISTIAN]"><img src="images/recruits/CHRISTIAN_GALLERY_THUMB_4.png" /></a>
				</div>	
			</div>	
		</div>
		<div id="adam_info" style="width: 850px; font-size: 15px; color: rgb(0, 0, 0); float: left; padding-left: 10px; display: none;">	
			<div style="float: left; font-size: 27px; font-weight: bold; height: 32px; width: 700px; padding-top: 25px;">
				ADAM
			</div>
			<div style="float: left; padding-top: 10px; width: 205px;">
				<img alt="before" src="images/recruits/ADAM-b4.jpg" width="195" height="369" />
				<!-- <div id="ADAM-bna">
					<div><img alt="before" src="images/recruits/ADAM-b4.jpg" width="195" height="369" /></div>
					<div><img alt="after" src="images/recruits/ADAM-after.jpg" width="195" height="369" /></div>
				</div> -->
			</div>
			<div class="next_ep_container" style="float: left; width: 580px; padding-top: 8px;" >
				<span style="padding-top: 5px; width: 430px; float: left;">Adam's a personal chef to professional athletes and constantly surrounded by food. Although he cooks healthy meals, he finds it hard to practice portion control and his body proves it! He justifies his weight with the belief that you can never trust a skinny chef. Adam buries himself in work, which gives him little time to exercise, but now he has even more reason to get fit: he's getting married!</span>
				<span style="float: left; padding-top: 10px; width: 382px;">Adam wants to look good for his future wife&mdash;and especially on his honeymoon&mdash;but can barely squeeze into his swimwear! When his doctor determines his weight problem is serious, he promises to do whatever it takes to get fit. He enlists Osmin for help, but little does he know his way is beyond anything he could ever imagine! Osmin has Adam pushing him down the street (in a stroller!) and running around a park with a mask and snorkel strapped on his face. His mom and girlfriend are his cheering squad, but does he need more than a push to get through this?</span>
			</div>
			<div class="next_ep_container" style="float: left; width: 520px; padding-top: 17px;" >
				<b>GALLERY</b><br />
				<div style="margin-top: 10px;">
					<a href="images/recruits/ADAM_GALLERY_LRG_1.png" rel="prettyPhoto[gallery_ADAM]"><img src="images/recruits/ADAM_GALLERY_THUMB_1.png" /></a>
					<a href="images/recruits/ADAM_GALLERY_LRG_2.png" rel="prettyPhoto[gallery_ADAM]"><img src="images/recruits/ADAM_GALLERY_THUMB_2.png" /></a>
					<a href="images/recruits/ADAM_GALLERY_LRG_3.png" rel="prettyPhoto[gallery_ADAM]"><img src="images/recruits/ADAM_GALLERY_THUMB_3.png" /></a>
					<a href="images/recruits/ADAM_GALLERY_LRG_4.png" rel="prettyPhoto[gallery_ADAM]"><img src="images/recruits/ADAM_GALLERY_THUMB_4.png" /></a>
				</div>	
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