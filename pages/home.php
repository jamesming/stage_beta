<?
include('includes/cms_prep.php'); 




	$page->template = "standard";	


	// HERO
	$theme = '';
	
	for($i=0;$i<4;$i++){
		
		$theme = $theme . 
		"<div style='background:transparent url(".$base_url."uploads/carousel_items_images/". $carousel_items[$i]['images'][0]['carousel_items_image_id']."/image.png) no-repeat 0 0;'></div>";
		
	};


	$page->components["theme"]  = $theme;
	




	// RIGHT TAB
	$right_tab = '';




	for($i=0;$i<4;$i++){
		
		if(  isset( $carousel_items[$i]['images'][2] ) ){
			$showHasTuneIn = TRUE;
		}else{
			$showHasTuneIn = FALSE;		
		};

		if(  $showHasTuneIn ){ 
			$carousel_id_2_use = $carousel_items[$i]['images'][2]['carousel_items_image_id'];
		}else{
			$carousel_id_2_use = $carousel_items[$i]['images'][1]['carousel_items_image_id'];
		};		

		$tab_num = $i + 1;
		$right_tab = $right_tab . '
			<li class="tab-'.$tab_num.'" style="background-image: url('.$base_url.'uploads/carousel_items_images/'. $carousel_id_2_use  .'/image.png);"></li>
		';	
	
	};
	
	$right_tab = $right_tab . '<li class="countdown_timer"  ><iframe   scrolling="no" frameBorder="0"  allowtransparency="true" src="http://cms.mynuvotv.com/countdown_tiny.php"  ></iframe></li>';

	// TUNE IN
	$tune_in = '';
	
 
	for($i=0;$i<4;$i++){
		
		if(  isset( $carousel_items[$i]['images'][2] ) ){
			$showHasTuneIn = TRUE;
		}else{
			$showHasTuneIn = FALSE;
		};
		

		
		if(  $showHasTuneIn ){
			
			
					$full_width = 640;
						
					if( $carousel_items[$i]['images'][1]['width'] < $full_width  ){
						$left = $full_width - $carousel_items[$i]['images'][1]['width'];
					}else{
						$left = 670 - $carousel_items[$i]['images'][1]['width'];	
					};
					
					
					if( $carousel_items[$i]['images'][1]['height'] > 100){
						$top = '260';
					}else{
						$top = '300';		
					};
				
					if( $carousel_items[$i]['images'][1]['facebook_link'] != '' ){
						$facebook_link ='<a target="_blank" href="'.  $carousel_items[$i]['images'][1]['facebook_link'] .'" style="height: '. $carousel_items[$i]['images'][1]['facebook_height'] .'px; z-index: 2; top: '. $carousel_items[$i]['images'][1]['facebook_top'] .'px; width: '. $carousel_items[$i]['images'][1]['facebook_width'] .'px; left: '. $carousel_items[$i]['images'][1]['facebook_left'] .'px;border:0px solid white">facebook</a> ';
					}else{
						$facebook_link = '';
					};
				
					if( $carousel_items[$i]['images'][1]['video_link'] != '' ){
						$video_link = '	<a href="'. $carousel_items[$i]['images'][1]['video_link'] .'" style="left:'. $carousel_items[$i]['images'][1]['video_left'] .'px; top:'. $carousel_items[$i]['images'][1]['video_top'] .'px; width:'. $carousel_items[$i]['images'][1]['video_width'] .'px; height:'. $carousel_items[$i]['images'][1]['video_height'] .'px; z-index:1;border:0px solid white">video</a>';
					}else{
						$video_link = '';
					};
				
					$tune_in = $tune_in .'
						<li>
							<div class="offset tune_in-' . $tune_num  . '" style="background:transparent url('.$base_url.'uploads/carousel_items_images/'. $carousel_items[$i]['images'][1]['carousel_items_image_id'].'/image.png) no-repeat 0 0; left:' . $left  . 'px; top:' . $top . 'px; width:'. $carousel_items[$i]['images'][1]['width'] .'px; height:'. $carousel_items[$i]['images'][1]['height'] .'px;"> '
							
							. $facebook_link 
								
							.	$video_link
							
							. '</div>
							<a class="full-link" ' .  ( $carousel_items[$i]['launch'] == 1 ? ' target="_blank" ' : '' ) . 'href="' . $carousel_items[$i]['carousel_items_page_link'] .  '">base link</a>	
						</li>
					';
		}else{
			
			$tune_in = $tune_in.'<li><a class="full-link" ' .  ( $carousel_items[$i]['launch'] == 1 ? ' target="_blank" ' : '' ) . 'href="' . $carousel_items[$i]['carousel_items_page_link'] .  '">base link</a>	</li>';
			
		};
	};
	

	$page->components["hero"] = '
	<ul class="unstyled tabs">'.$right_tab.'</ul>
	<ul class="unstyled controls">'.$tune_in.'</ul>';


	include('home_content.php');


?>