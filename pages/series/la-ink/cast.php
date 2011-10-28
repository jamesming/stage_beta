<?php     

if( $_SERVER['HTTP_HOST'] == 'tv.localhost'  ){
	$host = "localhost";
}else{
	$host = "192.168.110.211";
};


$user = "jamesming";  
$pw = "ourlady";     
$database = "mynuvotv_db";  

$db = mysql_connect($host,$user,$pw)
   or die("Cannot connect to mySQL.");

mysql_select_db($database,$db)
    or die("Cannot connect to database.");



$query = 	"SELECT *
					 FROM 
					 	showpage_items_images
					 WHERE
					 	showpage_items_images.showpage_item_id = 10
					 	";	

					 	
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$showpage_items_images[] = $row;
}

foreach( $showpage_items_images  as $showpage_items_image){
	if( $showpage_items_image['image_type'] == showpage_dropdown){
		$showpage_dropdown = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == showpage_title){
		$showpage_title = $showpage_items_image['id'];
	};
	if( $showpage_items_image['image_type'] == showpage_hero){
		$showpage_hero = $showpage_items_image['id'];
	};
}




?>

<?



	$page->title = "Miami Ink - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_title}/image.png) no-repeat 0 0; left:409px; top:96px; width:463px; height:111px;">
	</div>
	
<style>
.section-la-ink .theme div { 
	background: transparent url(http://cms.mynuvotv.com/uploads/showpage_items_images/{$showpage_hero}/image.png) no-repeat; }

</style>
EOHERO;


	$seriesBase = "la-ink";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/video">Video</a></li>
			<li><a href="/series/$seriesBase/features">Features</a></li>
			<li class="last"><a href="/series/$seriesBase/photos">Photos</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/kat-von-d-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Kat Von D</h3>
					</div>
					<p>After beefing with the crew of Miami Ink at the end of season 2, Kat opened her own tattoo shop in LA called LA Ink, which was also the name of her show.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/ami-james-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Ami James</h3>
					</div>
					<p>This tattoo artist is at it again in NY Ink, the latest Miami Ink spin-off set in SoHo. His mission: To become the Tattoo King of New York.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/darren-brass-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Darren Brass</h3>
					</div>
					<p>This tattoo artist considers Chris Garver, Joe Vegas, Bob Roberts, and Ed Hardy his influences. </p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/chris-nunez-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Chris Nu&ntilde;ez</h3>
					</div>
					<p>This Cuban tattoo artist received his first tattoo at 16. Now, it's  buried under a sea of new ones. </p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/yojiro-harada-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Yojiro Harada</h3>
					</div>
					<p>This Japanese tat artist began as the shop's apprentice, and is now tattooing full time. He sings in a punk rock band and is covered in ink. </p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Miami-Ink/chris-garver-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Chris Garver</h3>
					</div>
					<p>Considered one of the best tattoo artists in the world, Garver is said to have a two-year waiting list of clients.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>