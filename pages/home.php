<?

$oct4 = strtotime("October 4, 2011 8:00am");

if($_GET[oct4]) {
	$now = strtotime("October 4, 2011 8:01am");
}


if($now < $oct4) {

$page->template = "standard";	



	$theme = '';
	
	for($i=0;$i<=4;$i++){
		
		$theme = $theme . 
		"<div style='background:transparent url(".$base_url."uploads/carousel_items_images/". $carousel_items[$i]['images'][0]."/image.png) no-repeat 0 0;'></div>\n";
		
	};

	$page->components["theme"]  = $theme;
	
	

	$page->components["hero"] = <<<EOHERO
	<ul class="unstyled tabs">
		<li class="tab-1" style="background-image: url(/assets/images/heroes/home/tab-MLLV-ep408.png);"></li>
		<li class="tab-2" style="background-image: url(/assets/images/heroes/home/tab-Osmin_white.png);"></li>
		<li class="tab-3" style="background-image: url(/assets/images/heroes/home/tab-MIAMIINKv3.png);"></li>
		<li class="tab-4" style="background-image: url(/assets/images/heroes/home/tab-FACTinos.png);"></li>
	</ul>
	<ul class="unstyled controls">
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_MLLV_tonight.png) no-repeat 0 0; left:3px; top:270px; width:670px; height:170px;">
				<a target="_blank" href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>	
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt_osmin_tuesdays.png) no-repeat 0 0;  width: 669px; height: 161px; left: 25px; top: 270px;">
				<a href="http://www.facebook.com/OperationOsmin" style="left:200px; top:84px; width:218px; height:73px; z-index:2;">facebook</a>
				<a href="/operation-osmin/" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="/operation-osmin/">base link</a>
			</div>
			<a class="full-link" href="/operation-osmin/">base link</a>	
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/txt-MIAMIINK-weeknights-6p.png) no-repeat 0 0; width: 637px; height: 182px; left: 250px; top: 274px;">
				<a href="https://www.facebook.com/MiamiInknuvoTV" style="width: 217px; height: 72px; z-index: 2; left: 124px; top: 84px;">facebook</a>
				<a href="/series/miami-ink/video" style="left:397px; top:70px; width:235px; height:107px; z-index:1;">video</a>
				<a class="full-link" href="/series/miami-ink">base link</a>			
			</div>
			<a class="full-link" href="/series/miami-ink">base link</a>	
		</li>
		<li>
			<div class="offset" style="background:transparent url(/assets/images/heroes/home/) no-repeat 0 0;  width: 669px; height: 161px; left: 75px; top: 270px;">
			<!--<a target="_blank" href="http://www.facebook.com/OperationOsmin" style="left:200px; top:84px; width:218px; height:73px; z-index:2;">facebook</a> -->
				<a href="http://bcove.me/nsikmihh" style="left:511px; top:83px; width:154px; height:74px; z-index:1;">video</a>
				<a class="full-link" href="http://bcove.me/nsikmihh">base link</a>
			</div>
			<a class="full-link" href="http://bcove.me/nsikmihh">base link</a>		
		</li>	
	</ul>
	
EOHERO;

};

include('home_content.php');


?>