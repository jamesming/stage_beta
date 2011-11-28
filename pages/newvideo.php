<?
	$page->title = "New Videos Page | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";


	 function object_to_array($data){
	  if(is_array($data) || is_object($data)){
	    $result = array(); 
	    foreach($data as $key => $value)
	    { 
	      $result[$key] = $this->object_to_array($value); 
	    }
	    return $result;
	  }
	  return $data;
	}

  function jsonDecode ($json) { 
      $json = str_replace(array("\\\\", "\\\""), array("&#92;", "&#34;"), $json); 
      $parts = preg_split("@(\"[^\"]*\")|([\[\]\{\},:])|\s@is", $json, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); 
      foreach ($parts as $index => $part) 
      { 
          if (strlen($part) == 1) 
          { 
              switch ($part) 
              { 
                  case "[": 
                  case "{": 
                      $parts[$index] = "array("; 
                      break; 
                  case "]": 
                  case "}": 
                      $parts[$index] = ")"; 
                      break; 
                  case ":": 
                    $parts[$index] = "=>"; 
                    break;    
                  case ",": 
                    break; 
                  default: 
                      return null; 
              } 
          } 
          else 
          { 
              if ((substr($part, 0, 1) != "\"") || (substr($part, -1, 1) != "\"")) 
              { 
                  return null; 
              } 
          } 
      } 
      $json = str_replace(array("&#92;", "&#34;", "$"), array("\\\\", "\\\"", "\\$"), implode("", $parts)); 
      return eval("return $json;"); 
  } 
	
	
	$first_set_of_playlist_scroll_left_right = 5;
	
	$playlists = array(
		0 => array(
					'playlist_name' => '101 Extras',
					'id' => '48759451001'
					),
		1 => array(
					'playlist_name' => 'Comedy',
					'id' => '58518976001'
					),
		2 => array(
					'playlist_name' => 'Osmin Webisodes',
					'id' => '1067741571001'
					),
		3 => array(
					'playlist_name' => 'Extreme Extras',
					'id' => '58491372001'
					),	
		5 => array(
					'playlist_name' => 'Model Latina Las Vegas Profiles',
					'id' => '1067741562001'
					),
		6 => array(
					'playlist_name' => 'Mission Menu',
					'id' => '1163757251001'
					),
					
		7 => array(
					'playlist_name' => 'Exclusives',
					'id' => '58551281001'
					),					
												
									
	);
	
	
	foreach( $playlists  as  $playlist){
			$json_url = 'http://api.brightcove.com/services/library?command=find_playlist_by_id&media_delivery=http&token=mfu5Nh2a27pJx7LrgZbLx363WrLDHUmtJ5BXY0GkYK4.&playlist_id='.$playlist['id'];
			$ch = curl_init( $json_url );
				$options = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HTTPHEADER => array('Content-type: application/json')
			);
			
			curl_setopt_array( $ch, $options );
			$result = curl_exec($ch);
			$video['clips']  = json_decode($result)->videos;	
			$video['playlist_name'] = $playlist['playlist_name'];
			$videos[]= 	$video;
	}


	
	function get_script_for_left_right_scroll( $first_set_of_playlist_scroll_left_right ){
		$jCarouselLite_objects = '';
		for( $i = 0; $i < $first_set_of_playlist_scroll_left_right - 1 ; $i++){
			
			$jCarouselLite_objects = $jCarouselLite_objects . "
					    $('.playlist".$i."' ).jCarouselLite({
					        btnNext: '.next".$i."',
					        btnPrev: '.prev".$i."',
							    easing: 'backout',
							    speed: 1000,
   								circular: false,
   								mouseWheel: true,
    							scroll: 3
					    });
					    ";
		}
		return 	$jCarouselLite_objects;
	}

	$javascript="
	<script type='text/javascript' language='Javascript'>
		$(document).ready(function() {
			 		".get_script_for_left_right_scroll( $first_set_of_playlist_scroll_left_right )."	    
		});
	</script>
	";

	function get_each_video_li( $clips ){
		$each_video_li_plural = '';
		foreach( $clips as  $video ){
			
			$each_video_li_plural = $each_video_li_plural . "
									<li onClick='playTitleFromList(".$video->id.")'>
										<div>
											<div   class='img-div ' >
												<img   src='".$video->thumbnailURL."' alt='".$video->name."' >
											</div>
											<div  class='text-div ' >
												<div  class='video-name ' >".$video->name."</div>
												<div  class='watch-now ' >&nbsp;</div>
											</div>
										</div>
									</li>";
									
		}
		return $each_video_li_plural; 
	}

	$scrolling_playlist_section = '';
	
	for( $i = 0; $i < $first_set_of_playlist_scroll_left_right -1; $i++){

		$scrolling_playlist_section = $scrolling_playlist_section . "
		
				<div  class='  playlist".$i."_container' >
					
					<div  class='video_title_bar ' >
						<div  class='title-text ' >".$videos[$i]['playlist_name']."</div>
						<div class='scroll-button left prev".$i."'>&nbsp;</div>
						<div class='scroll-button right next".$i."'>&nbsp;</div>	
											
					</div>

					        
					<div class='video_scroller playlist".$i."'>
					    <ul>".get_each_video_li( $clips = $videos[$i]['clips'] )."</ul>
					</div>	
				</div>
		
		";

	} 

	function get_redsection_li($clips){
		
			$red_section_li_plural = '';
			
			$count = 0;

			foreach($clips as  $video ){
				
				$count++;
				if( $count == 4){	
					return $red_section_li_plural;	
				};
				
				$red_section_li_plural = $red_section_li_plural . "
				<li onClick='playTitleFromList(".$video->id.")'>
					<div>
						<div   class='img-div ' >
							<img   src='".$video->thumbnailURL."' alt='".$video->name."' >
						</div>
						<div  class='text-div ' >
							<div  class='video-name ' >".$video->name."</div>
							<div  class='watch-now ' >&nbsp;											
							</div>
						</div>
					
					</div>

				</li>";
			}
			return $red_section_li_plural;		
	}

	$red_playlist_section = '';

	for( $i = $first_set_of_playlist_scroll_left_right - 1; $i < count($playlists); $i++){
		
		$red_playlist_section = $red_playlist_section . "
		
				<div  class='red-column ' >
					<div  class='red-title ' >".$videos[$i]['playlist_name']."</div>
					<div  class='red-videos ' >
						<ul>". get_redsection_li($clips = $videos[$i]['clips'] ) ."</ul>
					</div>
										
				</div>";
				
	}		
			
		



	$page->components["content"] = <<<EOCONTENT
	{$javascript}
	<div   >

						<!-- Start of Brightcove Player -->
						
						<div style="display:none">
						
						</div>
						
						<!--
						By use of this code snippet, I agree to the Brightcove Publisher T and C 
						found at https://accounts.brightcove.com/en/terms-and-conditions/. 
						-->
						
						<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
						  <script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/APIModules_all.js"></script>
						<object id="myExperience" class="BrightcoveExperience">
						  <param name="bgcolor" value="#FFFFFF" />
						  <param name="width" value="802" />
						  <param name="height" value="427" />
						  <param name="playerID" value="975126117001" />
						  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtFfgMts1b_9xI-OSJcija0" />
						  <param name="isVid" value="true" />
						  <param name="isUI" value="true" />
						  <param name="dynamicStreaming" value="true" />
						  
						</object>
						
						<!-- 
						This script tag will cause the Brightcove Players defined above it to be created as soon
						as the line is read by the browser. If you wish to have the player instantiated only after
						the rest of the HTML is processed and the page load is complete, remove the line.
						-->
						<script type="text/javascript">brightcove.createExperiences();</script>
						
						<!-- End of Brightcove Player -->
						
						
						{$scrolling_playlist_section}
						<div  class='red-area-container ' >
							{$red_playlist_section}
						</div>
						
						

	</div>
EOCONTENT;

?>
