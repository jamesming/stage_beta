<?
include('includes/cms_prep.php'); 


	$page->template = "standard";	



	$theme = '';
	
	for($i=0;$i<4;$i++){
		
		$theme = $theme . 
		"<div style='background:transparent url(".$base_url."uploads/carousel_items_images/". $carousel_items[$i]['images'][0]."/image.png) no-repeat 0 0;'></div>";
		
	};


	$page->components["theme"]  = $theme;
	

	$right_tab = '';
	
	for($i=0;$i<4;$i++){
		
		$right_tab = $right_tab . '
			<li class="tab-1" style="background-image: url('.$base_url.'uploads/carousel_items_images/'. $carousel_items[$i]['images'][2].'/image.png);"></li>
		';	
	
	};
	



	$tune_in = '';
	
	
	for($i=0;$i<4;$i++){	
	$tune_in = $tune_in .'
	<li>
			<div class="offset" style="background:transparent url('.$base_url.'uploads/carousel_items_images/'. $carousel_items[$i]['images'][1].'/image.png) no-repeat 0 0; left:3px; top:270px; width:670px; height:170px;">
				<a target="_blank" href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;">facebook</a>
				<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
			</div>
			<a class="full-link" href="/model-latina-las-vegas/">base link</a>	
		</li>
	';
	};
	

	$page->components["hero"] = '
	<ul class="unstyled tabs">'.$right_tab.'</ul>
	<ul class="unstyled controls">'.$tune_in.'</ul>';


	include('home_content.php');


?>