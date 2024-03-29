<?php     

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
					)		
												
									
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




	$evergreens = array(
		0 => array(
			'name' => 'name0',
			'img' => 'assets/images/VIDEO-thumbnail-size.jpg',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
			),
		1 => array(
			'name' => 'name1',
			'img' => 'assets/images/VIDEO-thumbnail-size.jpg',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
			),
		2 => array(
			'name' => 'name2',
			'img' => 'assets/images/VIDEO-thumbnail-size.jpg',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
			),
		3 => array(
			'name' => 'name3',
			'img' => 'assets/images/VIDEO-thumbnail-size.jpg',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
			),
		4 => array(
			'name' => 'name4',
			'img' => 'assets/images/VIDEO-thumbnail-size.jpg',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
			)												
	);

$evergreen_section = '';

foreach( $evergreens  as  $evergreen){
	
		$evergreen_section =	$evergreen_section . "	
					<div class=' evergreen'> 
						<div  class='title ' >".$evergreen['name']."
						</div>
						<div  class='image_div ' >
							<img src='".$evergreen['img']."'>
						</div>
						<div  class='content ' >".$evergreen['description']."
						</div>
					</div>";
				
}

	

$nu_spotlight_li = "";
for($i=0; $i<=4; $i++){
	
		if( $nu_spotlight_items[$i]['nu_spotlight_items_launch'] == 1){
			$target = ' target=\"_blank\" ';
		}else{
			$target = ' ';
		};
	
		$nu_spotlight_li .= "
						<li>
							<a ". $target ." href=\"{$nu_spotlight_items[$i]['nu_spotlight_items_link']}\" class=\"no-break\"><img class=\"bordered media\" src=\"{$base_url}uploads/nu_spotlight_items_images/{$nu_spotlight_items[$i]['images']['feature']}/image.png\" /></a>
							<div class=\"copy\">
								<h2>Nu Spotlight</h2>
								<h3>{$nu_spotlight_items[$i]['nu_spotlight_items_title']}</h3>
								<p>{$nu_spotlight_items[$i]['nu_spotlight_items_blurb']}&nbsp;&nbsp;<a ". $target ." href=\"{$nu_spotlight_items[$i]['nu_spotlight_items_link']}\" class=\"no-break\">Read More +</a></p>
							</div>
						</li>
		";
};

	$episodes_videos = '';

	foreach($videos[0]['clips'] as  $video ){
					    	
		$episodes_videos = $episodes_videos."<li onClick='playTitleFromList(".$video->id.")'  >

																						<div   class='img-div ' >
																							<img   src='".$video->thumbnailURL."' alt='".$video->name."' >
																						</div>
																						<div  class='text-div ' >
																							<div  class='video-name ' >".$video->name."</div>
																							<div  class='watch-now '   style='	'  >&nbsp;											
																							</div>
																						</div>
											
																				</li>";
	}

	$clips_videos = '';
	
	foreach($videos[1]['clips'] as  $video ){
		    	
		$clips_videos = $clips_videos ."<li onClick='playTitleFromList(".$video->id.")'>

																				<div   class='img-div ' >
																					<img   src='".$video->thumbnailURL."' alt='".$video->name."' >
																				</div>
																				<div  class='text-div ' >
																					<div  class='video-name ' >".$video->name."</div>
																					<div  class='watch-now '   style='	'  >&nbsp;											
																					</div>
																				</div>
												
																		</li>";
						
	}
	
	
	
	
	
	function get_li( $clips ){
 
			$count = 0;
			$li = "";
			
			foreach($clips as  $video ){
				
				$count++;
			
				if( $count == 4){	
					return $li;
				};
				
				$li = $li . "
				<li onClick='playTitleFromList(".$video->id.")'>
					<div>
						<div   class='img-div ' >
							<img   src='".$video->thumbnailURL."' alt='".$video->name."' >
						</div>
						<div  class='text-div ' >
							<div  class='video-name '  >".$video->name."</div>
							<div  class='watch-now ' >&nbsp;											
							</div>
						</div>
					
					</div>
	
				</li>";
				
			}
			
			return $li; 
		
	}
	
	
	$red_section = '';
	
	for( $i = 2; $i < count($playlists); $i++){
		
	$red_section =	$red_section ." 		
	
				<div  class='red-column ' >
					<div  class='red-title ' >".$videos[$i]['playlist_name']."
					</div>
					<div  class='red-videos ' >
						<ul>".get_li( $clips = $videos[$i]['clips'] )."</ul>
					</div>
										
				</div>";
				
	}
	


	$page->components["content"] = <<<EOCONTENT

	<div class="schedule">
		<ul class="inline nav">
			<li class="prime-time"><span class="corner"></span>Prime Time</li>
			<li class="now-showing"><span class="corner"></span>Now Showing</li>
			<li class="full-schedule"><span class="corner"></span><a href="/schedule">Full Schedule +</a></li>
		</ul>
	</div>
	


	<div class="b-spot block"   >
		<div   class='first thirds '     >


				<div  id='black-tab-box'>
							<div  class=' playlist_name' >
								<div   id='episodes-title'  class='playlist-title '  >
									{$videos[0]['playlist_name']}
								</div>
								<div   id='clips-title'   class='playlist-title '>
									{$videos[1]['playlist_name']}
								</div>
								
							</div>
				
							<div   class='episodes-videos'  >
									    <ul>
									    	{$episodes_videos}
									    </ul>
							</div>		
				
							<div   class='clips-videos'  >
							    <ul>{$clips_videos}</ul>
							</div>				
				</div>

		</div>
		<div    class='second thirds '     >
		test
		</div>
		<div class="thirds ad ad-box" ></div>
	</div>
	


	<div  class='red-area-container ' >{$red_section}</div>


	<div  class='evergreen-container ' >{$evergreen_section}</div>
	
	<div class="c-spot block">
		<div class="ad ad-tall"></div>
		<div class="social">
			
			
			<div   style='float:left;margin:-2px 0px 0px 0px;'  >

				
				
				<a target='_blank' href='http://www.facebook.com/OperationOsmin'>
					<div class="facebook"    style='height:562px' >
						
						<fb:like-box 
							href="http://www.facebook.com/OperationOsmin" 
							width="370" 
							height="550" 
							show_faces="true" 
							border_color="#fff" 
							stream="true" 
							header="false">
						</fb:like-box>
						
					</div>
				</a>				
			</div>


			<div   style='float:left;'  >
				
				<div  class='youtube_widget ' >
					<a target='_blank' href='http://www.youtube.com/user/mynuvoTV?feature=mhee'>
						<div  id='youtube_widget_top'   >
						</div>
					</a>
					<ul class="playlist">
					</ul>
					<div  id='youtube_widget_bottom'  class='clearfix ' >
						<a target='_blank' href='http://www.youtube.com/user/mynuvoTV?feature=mhee'>Watch our YouTube Channel</a>
					</div>	
				</div>
				
				<!--  
				<div  id='player_div'>
					<div  id='close_button'>
						close[x]
					</div>
					<iframe  
						id='youtube_iframe' 
						src='' 
						frameborder='0' 
						allowfullscreen >
					</iframe>	
				</div>
				-->
				
				
			<a target='_blank' href='http://twitter.com/#!/mynuvoTV'>
				<div class="twitter">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'mynuvotv OR operationosmin OR modellatina OR missionmenu -@getglue',
					  interval: 3000,
					  width: 370,
					  height: 370,
					  theme: {
					    shell: {
					      background: '#ffffff',
					      color: '#1f1e1c'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#1f1e1c',
					      links: '#c4122f'
					    }
					  },
					  features: {
					    scrollbar: true,
					    loop: true,
					    live: true,
					    hashtags: true,
					    timestamp: false,
					    avatars: true,
						toptweets: false,
					    behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</a>				
			</div>

		</div>
	</div>


EOCONTENT;

?>