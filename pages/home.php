<?
include('includes/cms_prep.php'); 


	$page->template = "standard";	



	$theme = '';
	
	for($i=0;$i<4;$i++){
		
		$theme = $theme . 
		"<div style='background:transparent url(".$base_url."uploads/carousel_items_images/". $carousel_items[$i]['images'][0]['carousel_items_image_id']."/image.png) no-repeat 0 0;'></div>";
		
	};


	$page->components["theme"]  = $theme;
	

	$right_tab = '';
	
	for($i=0;$i<4;$i++){
		$tab_num = $i + 1;
		$right_tab = $right_tab . '
			<li class="tab-'.$tab_num.'" style="background-image: url('.$base_url.'uploads/carousel_items_images/'. $carousel_items[$i]['images'][2]['carousel_items_image_id'].'/image.png);"></li>
		';	
	
	};
	



	$tune_in = '';
	
	for($i=0;$i<4;$i++){
	
	$full_width = 640;
		
	if( $carousel_items[$i]['images'][1]['width'] < $full_width  ){
		$left = $full_width - $carousel_items[$i]['images'][1]['width'];
	}else{
		$left = 670 - $carousel_items[$i]['images'][1]['width'];	
	};
	
	
	if( $carousel_items[$i]['images'][1]['height'] > 167){
		$top = '260';
	}else{
		$top = '270';		
	};

	
	$tune_in = $tune_in .'
		<li>
			<div class="offset tune_in-' . $tune_num  . '" style="background:transparent url('.$base_url.'uploads/carousel_items_images/'. $carousel_items[$i]['images'][1]['carousel_items_image_id'].'/image.png) no-repeat 0 0; left:' . $left  . 'px; top:' . $top . 'px; width:'. $carousel_items[$i]['images'][1]['width'] .'px; height:'. $carousel_items[$i]['images'][1]['height'] .'px;"> '
			
			
			. '<a target="_blank" href="http://www.facebook.com/ModelLatina" style="height: 74px; z-index: 2; top: 93px; width: 203px; left: 326px;border:1px dotted red">facebook</a> ' .
				
				
				
			'	<a class="full-link" href="/model-latina-las-vegas/">base link</a>			
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