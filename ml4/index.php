<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Model Latina Las Vegas | nuvoTV Official Site</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="model latina, model, modeling, hot girls, runway, Latina models, culture, reality, webisodes, audition, casting, contestant, Hispanic fashion" />
<meta name="description" content="SITV.COM celebrates the lives of bicultural Latinos through compelling comedy, reality, movies and extreme sports programming, including the first-ever Latina modeling competition, Model Latina, and the Latin pop culture comedy show Latino 101." />
<link rel="shortcut icon" href="/sites/default/files/sitv_favicon.ico" type="image/x-icon" />
 <meta property="og:site_name" content="SiTV.com"/>
<!-- <meta property="og:image" content="http://www.sitv.com/sites/all/themes/sitv/images/misc/sitv-logo.jpg"/> --> 

<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/style.css?<?= time(); ?>" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/sitv/david.css?<?= time(); ?>" />
<?
if(strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
	//echo '<link rel="stylesheet" href="css/ipad.css" type="text/css" />';
}
?>

<link rel="stylesheet" media="only screen and (device-width: 768px)" href="css/ipad.css" type="text/css" />
<link rel="stylesheet" href="/misc/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<style>
#my-global-wrap {
	background: url('images/MLLV-Microsite-v6-bkg.jpg') no-repeat scroll 50% 0 transparent;
}

a:link, a:visited, a:active {
    color: #B8201D !important;
    font-size: 15px;
    outline: medium none;
    text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

.star_image {
	margin-bottom: 3px;
	padding-right: 5px;
}

.next_showing {
	float: left;
	width: 350px;
	height: 175px;
}

.sn_icon {
	margin-left: 3px;
	border: none;
	text-decoration: none;
}

img {
    border: 0 none;
}

br { clear: both; }
      
.cntSeparator {
	font-size: 30px;
	margin: 0px 7px;
	color: #000;
}

.footer_links a {
	font-size: 11px; color: white !important;
}

.footer_links a:link {
	font-size: 11px; color: white !important;
}

.footer_links a:visited {
	font-size: 11px; color: white !important;
}

.twtr-tweet-text a {
	font-size: 12px;
}

</style>

<script src="http://admin.brightcove.com/js/APIModules_all.js">
</script>
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
<script type="text/javascript" src="/sites/all/themes/sitv/js/operative.js?6"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.bgpos.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script src="/misc/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/sites/all/themes/sitv/js/puzzle.js"></script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#close1').mousedown(function() {
			alert('in');
			$('.center_content').fadeOut(1000, function() {
			});
		});
		$('#host').mousedown(function() {
			var text= '<div style="width: 400px; margin-top: 70px; margin-left: 100px; color: #FFFFFF; float: left;"><div style="font-size: 16px; font-weight: bold;"><u>JAZM&Iacute;N L&Oacute;PEZ</u></div><div style="padding-top: 10px;"><i>Model Latina\'s</i> hot new host, Jazm&iacute;n L&oacute;pez, is Vegas personified&mdash;she\'s bold, bright, and beautiful! When the Tejana temptress isn\'t hosting regional Mexican music shows, she\'s making it. Her Duranguense style fuses traditional banda and norte&ntilde;o with synthesizers, tuba bass lines, and sped-up tempos. L&oacute;pez, who grew up in Texas and started singing and playing piano at 4, performed with Los Tigres del Norte at a mere 15! She released her debut self-titled album in 2009, and is currently in the studio working on her follow-up.</div><div style="font-size: 14px; font-weight: bold; padding-top: 20px; padding-bottom: 20px;">"Every truly great person became great because someone somewhere along the way was willing to take a risk with them."</div><div>Follow Jazm&iacute;n on <a target="_blank" href="http://twitter.com/#!/jazminlopez">Twitter</a><br />Join her fan page on <a target="_blank" href="http://www.facebook.com/JazminLopezMusica">Facebook</a><br />See her career highlights on <a target="_blank" href="http://www.imdb.com/name/nm1377508/">IMDb</a></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/HOST-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#alex').mousedown(function() {
			var text= '<div style="width: 400px; margin-top: 70px; margin-left: 100px; color: #FFFFFF; float: left;"><div style="font-size: 16px; font-weight: bold;"><u>ALEX CAMBERT</u></div><div style="padding-top: 10px;">Some call him the Spanish Seinfeld; others, the Latin Leno, but everyone agrees Alex Cambert is just plain funny. He\'s one of a few TV personalities to successfully bounce between English- and Spanish-language television, and his comedic skills landed him his own late night talk show, <i>Mas Vale Tarde con Alex Cambert</i>. His big personality sent him straight to the red carpet as pre-show host for the 64th Annual Golden Globe Awards, and later, host of the Latin Billboard Music Awards and entertainment and lifestyle correspondent for ABC\'s <i>Good Morning America</i>. Cambert\'s singular sense of humor has also been featured on the <i>Late Show with David Letterman</i> and <i>The Tonight Show with Jay Leno</i>. He honed his comedic and Emmy Award-winning broadcasting skills in Miami during a time he calls "One Flew Over the Cuban\'s Nest." Long story short: Cambert can make you laugh in any language.</div><div style="font-size: 14px; font-weight: bold; padding-top: 20px; padding-bottom: 20px;">"Go ahead and live a little, but laugh a lot!"</div><div>Join Alex\'s fan page on <a target="_blank" href="http://www.facebook.com/people/Alex-Cambert/1401499917">Facebook</a><br />See his career highlights on <a target="_blank" href="http://www.imdb.com/name/nm1218513/">IMDb</a></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/ALEX-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#franco').mousedown(function() {
			var text= '<div style="width: 400px; margin-top: 70px; margin-left: 100px; color: #FFFFFF; float: left;"><div style="font-size: 16px; font-weight: bold;"><u>FRANCO LACOSTA</u></div><div style="padding-top: 10px;">Franco\'s eye for fashion has landed him gigs at high-end couture houses Chanel, Dior, Gaultier, and Alexander McQueen. A former model, his photographs have been published in <i>Paris Vogue</i> and <i>Elle</i>, and he\'s been featured on NBC, E!, MSNBC and FOX TV.</div><div style="font-size: 14px; font-weight: bold; padding-top: 20px; padding-bottom: 20px;">"My mission is to create visually stunning content through art, photography, fashion-forward wardrobe, yoga and compelling storytelling."</div><div>Join Franco\'s fan page on <a target="_blank" href="http://www.facebook.com/pages/Franco-Lacosta/144110955610140?sk=info">Facebook</a><br />Check out his <a target="_blank" href="http://www.francolacosta.com/francolacosta/francolacosta/francolacosta.html">portfolio</a></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/FRANCO-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#tomiko').mousedown(function() {
			var text= '<div style="width: 400px; margin-top: 70px; margin-left: 100px; color: #FFFFFF; float: left;"><div style="font-size: 16px; font-weight: bold;"><u>TOMIKO FRASER HINES</u></div><div style="padding-top: 10px;">The Bronx-born beauty was discovered while waitressing at a restaurant in New York City, and would soon become the first African-American model to get a major cosmetics contract with Maybelline New York. Tomiko has modeled for Tommy Hilfiger, The Gap, Old Navy, Lee Jeans and Target, and has been featured in <i>German Vogue</i>, <i>Glamour</i>, <i>British Marie Claire</i>, and <i>Cosmopolitan</i>. She made her acting debut opposite Freddie Prinze, Jr. and Monica Potter in the rom-com <i>Head Over Heels</i>, and later alongside Jennifer Lopez and Jane Fonda in <i>Monster-in-Law</i>. Tomiko\'s television credits include <i>Soul Food</i>, <i>CSI</i> and <i>The Game</i>. Tomiko lives in Los Angeles with her husband, but proudly calls NYC home.</div><div style="font-size: 14px; font-weight: bold; padding-top: 20px; padding-bottom: 20px;">"All Women Are Goddesses, Even If They Don\'t Know It Yet."</div><div>Follow Tomiko on <a target="_blank" href="http://twitter.com/#!/goddesstomiko">Twitter</a><br />Join her fan page on <a target="_blank" href="http://www.facebook.com/tomikofraser">Facebook</a><br />See her career highlights on <a target="_blank" href="http://www.imdb.com/name/nm0292251/">IMDb</a></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/TOMIKO-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#mansion').mousedown(function() {
			var text= '<div style="width: 700px; margin-top: 0px; margin-left: 100px; color: #FFFFFF; float: left;"><div id="top_windows" style="float: left; height: 150px;"><div id="mansion-9" style="float: left; width: 63px; padding-left: 166px; padding-top: 111px;"><a href="images/mansion/PIC-9.jpg" rel="prettyPhoto[mansion-9]"><img width="61" height="30" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-9.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-7" style="float: left; width: 87px; padding-left: 18px; padding-top: 72px;"><a href="images/mansion/PIC-7.jpg" rel="prettyPhoto[mansion-7]"><img width="85" height="44" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-7.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-4" style="float: left; width: 185px; padding-left: 31px; padding-top: 22px;"><a href="images/mansion/PIC-4.jpg" rel="prettyPhoto[mansion-4]"><img width="183" height="90" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-4.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-3" style="float: left; width: 117px; padding-left: 22px; padding-top: 21px;"><a href="images/mansion/PIC-3.jpg" rel="prettyPhoto[mansion-3]"><img width="115" height="92" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-3.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div></div><div id="middle_windows" style="float: left; height: 100px;"><div id="mansion-8" style="float: left; width: 53px; padding-left: 172px; padding-top: 15px;"><a href="images/mansion/PIC-8.jpg" rel="prettyPhoto[mansion-8]"><img width="51" height="76" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-8.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-6" style="float: left; width: 117px; padding-left: 2px; margin-top: -13px;"><a href="images/mansion/PIC-6.jpg" rel="prettyPhoto[mansion-6]"><img width="115" height="87" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-6.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-2" style="float: left; width: 316px; margin-top: -74px; padding-left: 30px;"><a href="images/mansion/PIC-2.jpg" rel="prettyPhoto[mansion-2]"><img width="314" height="147" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-2.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div></div><div id="bottom_windows" style="float: left; height: 100px;"><div id="mansion-5" style="float: left; width: 68px; padding-left: 264px; padding-top: 50px;"><a href="images/mansion/PIC-5.jpg" rel="prettyPhoto[mansion-5]"><img width="66" height="76" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-5.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div><div id="mansion-1" style="float: left; width: 287px; padding-left: 43px; margin-top: -39px;"><a href="images/mansion/PIC-1.jpg" rel="prettyPhoto[mansion-1]"><img width="285" height="180" src="images/1x1.png" onMouseOver="this.src=\'images/mansion/MANSION-1.png\'" onMouseOut="this.src=\'images/1x1.png\'" style="cursor: pointer;" /></a></div></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 125px; height: 434px; width: 765px; background-image: url(images/MANSION-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
				$("a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#about').mousedown(function() {
			var text= '<div style="width: 640px; margin-top: 260px; margin-left: 112px; color: #FFFFFF; float: left;"><div style="padding-top: 10px;">Bigger, brighter and bolder than ever before, nuvoTV\'s most popular modeling competition is back for its fourth season. Watch as 17 sexy, smart and sophisticated Latinas take over a Las Vegas mansion and compete for the Model Latina title. The challenges are harder (think: tigers), the drama is heavier (the cameras roll 24/7), and the city is steamier (it\'s Sin City, baby!). What happens in Vegas...is coming to your home Monday, August 1 at 10/9c.</div><div style="padding-top: 30px;"><i>Model Latina Las Vegas is produced by JK Film & TV Productions in association with nuvoTV.</i></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/ABOUT-CONTENT3.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#gallery').mousedown(function() {
			var text= '<div style="width: 400px; margin-top: 70px; margin-left: 100px; color: #FFFFFF; float: left;"><a href="images/mansion/-1.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion_thumb.jpg" /></a><br /><span style="font-size: 16px; padding-left: 25px; font-weight: bold;">The Mansion</span></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/PHOTOGALLERY-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#videos').mousedown(function() {
			var text= '<div style="width: 700px; margin-top: 28px; margin-left: 112px; color: #FFFFFF; float: left;">'+$('#video_player').html()+'</div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/VIDEOS-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				// Animation complete.
			});
		});
		$('#extras').mousedown(function() {
			var text= '<div style="width: 700px; margin-top: 10px; margin-left: 120px; color: #FFFFFF; float: left;"><div style="font-size: 16px; font-weight: bold; padding-bottom: 10px;">MANSION MIX-UP</div><div class="puzzle"><img width="602" height="342" alt="Pastport Mix-up" src="images/mansion/-10.jpg" /></div></div>';
			$('.center_content').fadeOut(1000, function() {
				// Animation complete.
				$('.center_content').html('<div style="margin-top: 118px; height: 434px; width: 765px; background-image: url(images/EXTRAS-CONTENT.jpg);"><span onClick="getElementById(\'center_content\').innerHTML = \'<div style=&quot;padding-top: 150px; padding-left: 25px;&quot;><img src=&quot;images/ML--MODELS.png&quot; /></div>\';" class="close" style="float: right; width: 70px; height: 30px; cursor: pointer;">&nbsp;</span>'+text+'</div>');
			});
			$('.center_content').fadeIn(1000, function() {
				$( "div.puzzle, p" ).puzzle( 85 );
			});
		});		
		//$("a[rel^='prettyPhoto']").prettyPhoto();
	});
</script>		


</head>

<body id="page-model-latina-las-vegas2" class="section-model-latina-las-vegas2" style="background-color: #000000; background-image: none;" >


<div class="not-front logged-in page-node node-type-page one-sidebar sidebar-right">
	<div id="my-global-wrap"  style="">
		<div id="my-container" style="width: 1000px;">
			<!--header -->

			<div id="top_block" style="width: 100%; height: 247px; float: left;">
				<div id="my-header" style="float: left; margin-top: 0px; width: 100%; height: 108px;">
					<div style="float: left; width: 215px; padding-top: 0px">
						<a href="http://www.mynuvotv.com" target="_blank"><img src="images/nuvotv-logo.png" /></a>
					</div>
				
					<div class="my-top-ad" style="height: 101px; width: 742px; position: relative; top: 0px; left: 0px; float: right; background: url('images/horizontal-banner-ad.png') no-repeat scroll 0% 0 transparent;">
						<div class="content" style="padding-left: 15px;" >
							<script language="javascript">
								printAd(1,1)
							</script>
						</div>
					</div>
				</div>
				<!--end of header -->
					
				<div style="margin-left: 190px; padding-top: 5px; float: left;">
					<img src="images/MLLV-LOGO-animation.gif" />
				</div>
				<div style="float: right; width: 195px; padding-top: 0px;">
					<img src="images/tune-in.gif" />
				</div>
					

			</div>

			<div id="middle_block">
				<div class="middle_content" style="float: left; height: 660px; width: 836px;">
					<div class="hosts_container" style="float: left; width: 60px; height: 516px; margin-top: 50px;">
						<div id="jazmin" style="height: 146px; position: relative; z-index: 100;">
							<img id="host" name="host" src="images/host.png" onMouseOver="host.src='images/host-rollover.png'" onMouseOut="host.src='images/host.png'" style="cursor: pointer;" />
						</div>
						<div id="alex" style="height: 143px; position: relative; z-index: 90; padding-left: 10px;">
							<img id="alex" name="alex" src="images/alex.png" onMouseOver="alex.src='images/alex-rollover.png'" onMouseOut="alex.src='images/alex.png'" style="cursor: pointer;" />
						</div>
						<div id="franco" style="height: 133px; position: relative; z-index: 80; padding-left: 6px;">
							<img id="franco" name="franco" src="images/franco.png" onMouseOver="franco.src='images/franco-rollover.png'" onMouseOut="franco.src='images/franco.png'" style="cursor: pointer;" />
						</div>
						<div id="tomiko" style="height: 140px; position: relative; z-index: 70; padding-left: 8px;">
							<img id="tomiko" name="tomiko" src="images/tomiko.png" onMouseOver="tomiko.src='images/tomiko-rollover.png'" onMouseOut="tomiko.src='images/tomiko.png'" style="cursor: pointer;" />
						</div>
					</div>
					<div id="center_content" class="center_content" style="height: 556px; float: left; width: 768px; position: relative; z-index: 20;">
						<div style="padding-top: 150px; padding-left: 25px;">
							<img src="images/ML--MODELS.png" />
						</div>
					</div>	
					<div style="height: 103px; width: 100%; float: left;">
						<div id="mansion" style="height: 46px; width: 146px; float: left; padding-top: 36px; padding-left: 20px;">
							<img id="mansion" name="mansion" src="images/mansion.png" onMouseOver="mansion.src='images/mansion-rollover.png'" onMouseOut="mansion.src='images/mansion.png'" style="cursor: pointer; position: relative; z-index: 10;" />
						</div>
						<div id="about" style="height: 43px; width: 120px; float: left; padding-left: 0px;">
							<img id="about" name="about" src="images/about.png" onMouseOver="about.src='images/about-rollover.png'" onMouseOut="about.src='images/about.png'" style="cursor: pointer; position: relative; z-index: 10;" />
						</div>
						<div id="gallery" style="height: 33px; width: 179px; float: left; padding-top: 36px;">
							<img id="gallery" name="gallery" src="images/photo-gallery.png" onMouseOver="gallery.src='images/photo-gallery-rollover.png'" onMouseOut="gallery.src='images/photo-gallery.png'" style="cursor: pointer; position: relative; z-index: 10;" />
						</div>
						<div id="videos" style="height: 40px; width: 151px; float: left; ">
							<img id="videos" name="videos" src="images/videos.png" onMouseOver="videos.src='images/videos-rollover.png'" onMouseOut="videos.src='images/videos.png'" style="cursor: pointer; position: relative; z-index: 10;" />
						</div>
						<div id="extras" style="height: 40px; width: 157px; float: left; padding-top: 36px;">
							<img id="extras" name="extras" src="images/extras.png" onMouseOver="extras.src='images/extras-rollover.png'" onMouseOut="extras.src='images/extras.png'" style="cursor: pointer; position: relative; z-index: 10;" />
						</div>
					</div>
					</div>
				<div class="my-ad160x600" style="float: right; margin-bottom: 0px; height: 610px; width: 161px; padding-top: 15px; margin-top: 18px; background: url('images/vertical-banner-ad.png') no-repeat scroll 0% 0 transparent; position: relative; z-index: 200;">
					<script language="javascript">
					printAd(2,2)
					</script>
				</div>
			</div>
			<div class="footer_block" style="width: 100%; float: left; padding-top: 3px; margin-bottom: 100px;">
				<div class="my-ad250x300" style="float: left; background: url('images/square-banner-ad.png') no-repeat scroll 0% 0 transparent; border: 1px solid white; padding-top: 15px; width: 301px; height: 251px;" >
					<script language="javascript">
					   printAd(3,3)
					</script>
				</div>
				<div class="bottom_middle" style="width: 503px; float: left; margin-left: 7px;height: 265px;">
					<div class="twitter" style="float: left; width: 503px;" >
						<script src="http://widgets.twimg.com/j/2/widget.js"></script> <script>
							new TWTR.Widget({
							  version: 2,
							  type: 'list',
							  rpp: 30,
							  interval: 6000,
							  width: 503,
							  height: 209,
							  theme: {
								shell: {
								  background: '#BC1F1A',
								  color: '#000000'
								},
								tweets: {
								  background: '#000000',
								  color: '#FFFFFF',
								  links: '#b8201D'
								}
							  },
							  features: {
								scrollbar: true,
								loop: false,
								live: true,
								hashtags: true,
								timestamp: true,
								avatars: true,
								behavior: 'all'
							  }
							}).render().setList('ModelLatina', 'model-latina-models').start();
							</script>
					</div>
				</div>

				<div class="social_links" style="float: left; background: url('images/footer-box.png') no-repeat scroll 0% 0pt #000000;  margin-left: 7px; width: 178px; height: 267px;" >
					<div id="social_network_links_small" style="float: left; width: 140px; padding-top: 30px; padding-left: 28px;"><a target="_blank" href="https://www.facebook.com/ModelLatina" class="sn_icon"><img width="24" height="24" alt="Facebook" src="/sites/all/themes/sitv/images/socialMedia/facebook.png" /></a> 	<a target="_blank" href="http://twitter.com/ModelLatina" class="sn_icon"><img width="24" height="24" alt="Twitter" src="/sites/all/themes/sitv/images/socialMedia/twitter.png" /></a> 	<a target="_blank" href="http://www.myspace.com/si_tv" class="sn_icon"><img width="24" height="24" alt="Myspace" src="/sites/all/themes/sitv/images/socialMedia/myspace.png" /></a> 	<a target="_blank" href="https://foursquare.com/mynuvotv" class="sn_icon"><img width="24" height="24" alt="Foursquare" src="/sites/all/themes/sitv/images/socialMedia/foursquare.png" /></a> 	<a target="_blank" href="http://www.youtube.com/user/SiTVdotCom?feature=mhum" class="sn_icon"><img width="24" height="24" alt="YouTube" src="/sites/all/themes/sitv/images/socialMedia/youtube.png" /></a> 	<a target="_blank" href="http://www.hulu.com/network/si-tv?sort=popularity" class="sn_icon"><img width="24" height="24" alt="Hulu" src="/sites/all/themes/sitv/images/socialMedia/hulu.png" /></a> 	<a target="_blank" href="http://itunes.apple.com/us/podcast/si-tv-video-podcast/id409237747" class="sn_icon"><img width="24" height="24" alt="Podcast" src="/sites/all/themes/sitv/images/socialMedia/podcast.png" /></a> 	<a target="_blank" href="http://itunes.apple.com/WebObjects/MZStore.woa/wa/viewRoom?fcId=259316686&amp;id=37" class="sn_icon"><img width="24" height="24" alt="iTunes" src="/sites/all/themes/sitv/images/socialMedia/itunes.png" /></a></div>
					<div class="footer_links" style="float: left; padding-top: 12px; padding-left: 12px; width: 155px;">
						<div>
							<a title="ABOUT" href="/about-us">ABOUT US</a>
							<a style="float: right;" title="PRIVACY POLICY" href="/privacy-policy">PRIVACY</a> 
						</div>
						<div style="padding-top: 4px;">
							<a title="CONTACT" href="/contact">CONTACT</a>
							<a style="float: right;" title="COPYRIGHT" href="/copyright">COPYRIGHT</a>
						</div>
						<div style="padding-top: 4px;">
							<a target="_blank" title="PRESS" href="http://press.sitv.com/">PRESS</a>
							<a style="float: right;" title="SITEMAP" href="/sitemap">SITEMAP</a>
						</div>
						<div style="padding-top: 4px;">
							<a target="_blank" title="ADVERTISE" href="http://mediakit.sitv.com/">ADVERTISE</a> 
							<a style="float: right;" title="HELP" href="/help">HELP</a> 
						</div>
						<div style="padding-top: 4px;">
							<a title="AFFILIATE" href="/affiliate">AFFILIATE</a> 	
							<a style="float: right;" title="NEWSLETTER" href="/newsletter">NEWSLETTER</a>
						</div>
						<div style="padding-top: 4px;">
							<a title="JOBS" href="/sitv-jobs">JOBS</a> 	
							<a style="float: right;" href="/get-sitv">GET S&iacute; TV</a>
						</div>
						<div style="padding-top: 4px;">
							<a title="TERMS OF USE" href="/terms-of-use">TERMS OF USE</a>						
						</div>	
					</div>
				</div>
			</div>
			<div id="video_player" style="display:none;">
				<object id="myExperience921409540001" class="BrightcoveExperience">
				  <param name="bgcolor" value="#FFFFFF" />
				  <param name="width" value="615" />

				  <param name="height" value="347" />
				  <param name="playerID" value="979373775001" />
				  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVss26Xw7zNq1Tx2cdvttt5d" />
				  <param name="isVid" value="true" />
				  <param name="isUI" value="true" />
				  <param name="dynamicStreaming" value="true" />
				  
				  <param name="@videoPlayer" value="963665071001" />
				</object>
			</div>
			<div id="photo_galleries" style="display: none;">
				<div id="gallery_thumbs">
					
				</div>
				<a href="images/mansion/-2.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-2.jpg" /></a>
				<a href="images/mansion/-3.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-3.jpg" /></a>
				<a href="images/mansion/-4.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-4.jpg" /></a>
				<a href="images/mansion/-5.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-5.jpg" /></a>
				<a href="images/mansion/-9.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-9.jpg" /></a>
				<a href="images/mansion/-10.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-10.jpg" /></a>
				<a href="images/mansion/-12.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-12.jpg" /></a>
				<a href="images/mansion/-14.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-14.jpg" /></a>
				<a href="images/mansion/-15.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-15.jpg" /></a>
				<a href="images/mansion/-17.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-17.jpg" /></a>
				<a href="images/mansion/-18.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-18.jpg" /></a>
				<a href="images/mansion/-19.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-19.jpg" /></a>
				<a href="images/mansion/-20.jpg" rel="prettyPhoto[gallery_mansion]"><img src="images/mansion/-20.jpg" /></a>
			</div>
			<div id="mansion_photos" style="display: none;">
				<!-- <a href="images/mansion/PIC-1.jpg" rel="prettyPhoto[mansion-1]"><img src="images/mansion/PIC-1.jpg" /></a>
				<a href="images/mansion/PIC-2.jpg" rel="prettyPhoto[mansion-2]"><img src="images/mansion/PIC-2.jpg" /></a>
				<a href="images/mansion/PIC-3.jpg" rel="prettyPhoto[mansion-3]"><img src="images/mansion/PIC-3.jpg" /></a>
				<a href="images/mansion/PIC-4.jpg" rel="prettyPhoto[mansion-4]"><img src="images/mansion/PIC-4.jpg" /></a>
				<a href="images/mansion/PIC-5.jpg" rel="prettyPhoto[mansion-5]"><img src="images/mansion/PIC-5.jpg" /></a>
				<a href="images/mansion/PIC-6.jpg" rel="prettyPhoto[mansion-6]"><img src="images/mansion/PIC-6.jpg" /></a>
				<a href="images/mansion/PIC-7.jpg" rel="prettyPhoto[mansion-7]"><img src="images/mansion/PIC-7.jpg" /></a>
				<a href="images/mansion/PIC-8.jpg" rel="prettyPhoto[mansion-8]"><img src="images/mansion/PIC-8.jpg" /></a>
				<a href="images/mansion/PIC-9.jpg" rel="prettyPhoto[mansion-9]"><img src="images/mansion/PIC-9.jpg" /></a> -->
			</div>
		</div>
	</div>	
</div>
</body>
</html>