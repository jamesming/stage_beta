
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">

<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		
		<title><? echo $page->title; ?></title>
		<meta name="description" content="<? echo $page->description; ?>" />
		<meta name="keywords" content="<? echo $page->keywords; ?>" />

		<link rel="shortcut icon" href="/favicon.ico" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=1000">
	
		<link rel="stylesheet" href="/assets/css/style.css?<? echo time(); ?>">
		
		

		
		<script type="text/javascript">
			var currentPage = "<? echo $page->path ?>";

			<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "UA-6608993-1"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
			
			// google analytics

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-24210483-1']);
			_gaq.push(['_setDomainName', '.mynuvotv.com']);
			_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/_javascript_'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; 
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>		
		
	</head>
	
	<body class="<? echo $page->getBodyClasses(); ?>">
		<div class="hidden">
			<div id="fb-root">&nbsp;</div>
			<script src="http://connect.facebook.net/en_US/all.js#appId=193574447346913&amp;xfbml=1"></script>
		</div>
		<div class="wrapper"   >
			<?
			 echo $page->components["theme"] . "\n"; 
			?>
			<div class="stripe">
<?

$now = time();

$start = strtotime('April 18, 2011 12:01 am');
$end = strtotime('September 30, 2011 11:59 pm');

if($_GET[wed]) {
	$now = strtotime("August 10, 2011 12:01am");
}

if($_GET[thu]) {
	$now = strtotime("August 11, 2011 12:01am");
}

if($_GET[wed2]) {
	$now = strtotime("August 17, 2011 12:01am");
}

$day = date('D', $now);

if(($now > $start AND $now < $end) AND $day == 'Wed') {
	if($page->path == 'home') {
		if(strpos($_SERVER['HTTP_USER_AGENT'],'iPhone') OR strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) {
		} else {			
			echo '<style>
				.stripe { background: transparent url(/assets/images/stripe_army4.png) no-repeat center top; position: relative; z-index: 2; -webkit-background-size: 2000px 1354px; }
			</style>
			<!-- <img id="army_banner" src="assets/images/army_strip_black.png" style="position: absolute; margin-top: 232px; right: 1400px;" /> -->';
		}
	}
}

?>				
				<div class="sw-bg">
					<div class="se-bg">
						<div class="container">
							<div class="header">
								<div class="ad ad-long" ><!--<script type="text/javascript">printAd(1, 1);</script>--></div>
								<a class="logo" href="/">Home</a>
								<ul class="inline nav">
									<li class="has-dropdown">
										<a href="#">Series</a>
										<div class="dropdown dd-series">
											<ul class="unstyled">
												<li><a href="/series/adrenalina" data-menu-image="/assets/images/dropdown/_drop_Adrenalina.jpg">Adrenalina</a></li>
												<li><a href="/series/chicago-hope" data-menu-image="/assets/images/dropdown/_drop_ChicagoHope.jpg">Chicago Hope</a></li>
												<li><a href="/series/cristinas-court" data-menu-image="/assets/images/dropdown/_drop_ChristinaCourt.jpg">Cristina's Court</a></li>
												<li><a href="/series/dark-angel" data-menu-image="/assets/images/dropdown/_drop_DarkAngel.jpg">Dark Angel</a></li>
												<li><a href="/series/fame" data-menu-image="/assets/images/dropdown/_drop_Fame.jpg">Fame</a></li>
												<li><a href="/series/hill-street-blues" data-menu-image="/assets/images/dropdown/_drop_HillStBlues.jpg">Hill Street Blues</a></li>
												<li><a href="/series/in-living-color" data-menu-image="/assets/images/dropdown/_drop_inLivingColor.jpg">In Living Color</a></li>
												<li><a href="/series/la-law" data-menu-image="/assets/images/dropdown/_drop_LAlaw3.jpg">L.A. Law</a></li>
												<li><a href="/series/latino-101-s1" data-menu-image="/assets/images/dropdown/_drop_Latino101_S1-v2.jpg">Latino 101 Season 1</a></li>
												<li><a href="/series/latino-101-s2" data-menu-image="/assets/images/dropdown/_drop_Latino101_S2.jpg">Latino 101 Season 2</a></li>
												<li><a href="/series/miami-ink" data-menu-image="/assets/images/dropdown/_drop_MiamiInk.jpg">Miami Ink</a></li>
												<li><a href="/series/mission-menu" data-menu-image="/assets/images/dropdown/_drop_MissionMenu.jpg">Mission Menu</a></li>
												<li><a href="/series/mission-menu" data-menu-image="/assets/images/dropdown/_drop_ML_LA.jpg">Model Latina L.A.</a></li>
											</ul>
											<ul class="unstyled">
												<li><a href="/model-latina-las-vegas/" data-menu-image="/assets/images/dropdown/_drop_ML_Vegas.jpg">Model Latina Las Vegas</a></li>
												<li><a href="/series/model-latina-miami" data-menu-image="/assets/images/dropdown/_drop_ML_Miami2.jpg">Model Latina Miami</a></li>												
												<li><a href="/series/model-latina-nyc" data-menu-image="/assets/images/dropdown/_drop_ML_NYC_ELORA.jpg">Model Latina NYC</a></li>
												<li><a href="/series/new-york-undercover" data-menu-image="/assets/images/dropdown/_drop_NYUndercover.jpg">New York Undercover</a></li>
												<li><a href="/series/nypd-blue" data-menu-image="/assets/images/dropdown/_drop_NYPDBlue2.jpg">NYPD Blue</a></li>
												<li><a href="/operation-osmin/" data-menu-image="/assets/images/dropdown/_drop_Osmin.jpg">Operation Osmin</a></li>
												<li><a href="/series/pastport-argentina" data-menu-image="/assets/images/dropdown/_drop_Past_Arg.jpg">Pastport Argentina</a></li>
												<li><a href="/series/pastport-colombia" data-menu-image="/assets/images/dropdown/_drop_Past_Columbia2.jpg">Pastport Colombia</a></li>
												<li><a href="/series/pastport-cuba" data-menu-image="/assets/images/dropdown/_drop_Past_Cuba2.jpg">Pastport Cuba</a></li>
												<li><a href="/series/pastport-puerto-rico" data-menu-image="/assets/images/dropdown/_drop_Past_PuertoRico.jpg">Pastport Puerto Rico</a></li>
												<li><a href="/series/pastport-venezuela" data-menu-image="/assets/images/dropdown/_drop_Past_venez.jpg">Pastport Venezuela</a></li>
												<li><a href="/series/prison-break" data-menu-image="/assets/images/dropdown/_drop_PrisonBreak.jpg">Prison Break</a></li>
											</ul>
										</div>
									</li>
									<li><a href="/movies">Movies</a></li>
									
<!--									
									<li class="has-dropdown">
										<a href="#">Movies</a>
										<div class="dropdown dd-movies">
											<ul>
												<li><a href="/movies/buena-vista-social-club">Buena Vista Social Club</a></li>
												<li><a href="/movies/el-mariachi">El Mariachi</a></li>
												<li><a href="/movies/el-superstar">El Superstar</a></li>												
												<li><a href="/movies/girlfight">Girlfight</a></li>
												<li><a href="/movies/open-your-eyes">Open Your Eyes</a></li>
												<li><a href="/movies/quinceanera">Quincea&ntilde;era</a></li>
												<li><a href="/movies/things-are-tough-all-over">Things Are Tough All Over</a></li>
												<li><a href="/movies/tortilla-soup">Tortilla Soup</a></li>
												<li><a href="/movies/woman-on-top">Woman on Top</a></li>												
											</ul>
										</div>
									</li>
-->									
									<li><a href="/videos">Videos</a></li>
								</ul>
								<ul class="inline links">
									<li><a href="/schedule">Schedule</a></li>
									<li><a href="/nu-stuff">Stuff</a></li>
									<li><a href="/nu-voices">Social</a></li>
									<li><a target="_blank" href="http://www.cafepress.com/mynuvotv">Store</a></li>
									<li class="last"><a class="find-nuvo" href="/find-nuvotv">Find nuvoTV</a></li>
								</ul>
								<form class="search" method="get" action="http://www.google.com/search">
									<input type="text" class="default text" name="q" value="Search..." />
									<input type="hidden" name="sitesearch" value="mynuvotv.com" />
									<input type="submit" class="submit" value="submit" />
								</form>
							</div>