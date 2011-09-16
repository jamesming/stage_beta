<?
include('libs/clientlogin.php');
include('libs/sqlbuilder.php');

$tableid = "1133755";

if ( isset($_POST['user']) && !empty($_POST['user']) ) {
	$token = ClientLogin::getAuthToken('plugim@gmail.com', 'H7sxt5sD1');
	$ftclient = new FTClientLogin($token);

	$fbuser = $_POST['user'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$query = "SELECT ROWID FROM $tableid WHERE fbuid = '".$fbuser['id']."';";
	$results = $ftclient->query($query);
	$results = explode("\n", $results);
	$rowid = $results[1];

	if ( $rowid != "" ) {
		$query = "UPDATE $tableid SET latitude = '$latitude', longitude = '$longitude' WHERE ROWID = '$rowid';";
	} else {
		$query = "INSERT INTO $tableid (fbuid, fbname, fbusername, fblink, fbcomment, date, latitude, longitude) 
			  VALUES ('".$fbuser['id']."', '".$fbuser['name']."', '".$fbuser['username']."', '".$fbuser['link']."', '', '".date('m/d/y')."', '$latitude', '$longitude');";
	}

	echo $ftclient->query($query);
	die();
}

$page = "pastport-social";
$title = "Pastport";
$url = "http://www.mynuvotv.com/series/pastport-venezuela";
$target = "_top";
$keywords = "";
$description = "";
$appId = "104189016346074";
$infotxt = '<span class="googft-info-window">Great! If this location is correct please be sure to enter your story in the comments below or you can move your pin by clicking another location on the map.</span>';

$extraHeader = <<<EOHEADER
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		var map;
		var marker;
		var infowindow;
		var fbuser;

		var layer;
		var tableid = 1133755;
		var infoWindowIsOpen = false;
		var infohtml = '$infotxt';

		// A function to create the marker and set up the event window function 
		function createMarker(latlng) {

			marker = new google.maps.Marker({
				position: latlng,
				map: map,
				zIndex: Math.round(latlng.lat() * -100000) << 5
			});

			google.maps.event.addListener(marker, 'click', function() {
				if ( infowindow ) infowindow.close();
				infowindow = new google.maps.InfoWindow({
					content: infohtml,
					maxWidth: 200
				});
				infowindow.open(map, marker);
				$('.googft-info-window').parent().css('overflow', 'visible');
			});


			$.post("", {
				user: fbuser,
				latitude: latlng.lat(),
				longitude: latlng.lng()
			},
			function(data) {
				// alert("Data Loaded: " + data);
			});

			google.maps.event.trigger(marker, 'click');
		}

		function initialize() {
			FB.Canvas.setAutoResize();

			FB.getLoginStatus(function(response) {
				if (response.session) {
					// logged in and connected user
					FB.api('/'+response.session.uid, function(response) {
						fbuser = response;
					});
				} else {
					fbuser = false;
				}
			});

			FB.Event.subscribe('comment.create', function(response) {
				// do something with response.session
//				if ( waitingForComment == true ) {
					// get comment text and post to fusion tables
					FB.api('/comments/?ids=http://www.mynuvotv.com/facebook/v1/pastport-social', function(response) {
						var comments = $.parseJSON(response);
						var i = 0;
//						$.each($.parseJSON(response), function(i, item) {
//							alert(item.message);
//						});
					});
//				}
			});

			FB.Event.subscribe('comment.remove', function(response) {
				// do something with response.session
			});

			map = new google.maps.Map(document.getElementById('map_canvas'), {
				center: new google.maps.LatLng(0, 0),
				zoom: 1,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: true,
				navigationControl: true
			});

			layer = new google.maps.FusionTablesLayer(tableid);
			layer.setQuery("SELECT 'latitude' FROM " + tableid);
			layer.setMap(map);

			google.maps.event.addListener(map, 'click', function(event) {
				if (infowindow) infowindow.close();

				//call function to create marker
				if ( marker ) {
					marker.setMap(null);
					marker = null;
				}

				if ( fbuser ) {
					createMarker(event.latLng);				
				} else {
					FB.login(function(response) {
						if (response.session) {
							// permission granted, get user info
							FB.api('/'+response.session.uid, function(response) {
								fbuser = response;
								createMarker(event.latLng);	
							});
						} else {
							// permission denied, inform user why they can't use the map
							alert("Please grant NuvoTV permission to access your basic profile information so you can place your pin on the map.");
							return false;
						}
					});
				}
			});
		}
	</script>
EOHEADER;

include("templates/header.php");
?>
		<div id="background" class="clearfix">
			<div id="header">
				<ul class="nav">
					<li><a href="<? echo $url ?>" target="<? echo $target ?>">Home</a></li>
					<li><a href="<? echo $url ?>/cast" target="<? echo $target ?>">Cast</a></li>
					<li><a href="<? echo $url ?>/video" target="<? echo $target ?>">Video</a></li>
					<li><a href="<? echo $url ?>#episodes" target="<? echo $target ?>">Episodes</a></li>
					<li><a href="<? echo $url ?>/features" target="<? echo $target ?>">Features</a></li>
					<li><a href="<? echo $url ?>/photos" target="<? echo $target ?>">Photos</a></li>
				</ul>
			</div>
			<div class="banner">
				<img src="assets/images/hero-pastport-social.png" alt="WE WANT TO HEAR YOUR STORY" />
			</div>
			<div id="hero">
				<div class="map-wrapper">
					<div id="map_canvas"></div>
				</div>
				<fb:comments href="http://www.mynuvotv.com/facebook/v1/pastport-social" num_posts="4" width="472"></fb:comments>
			</div>
			<div id="nodes">
				<a href="http://www.facebook.com/OperationOsmin" title="Operation Osmin" target="<? echo $target ?>">Operation Osmin</a>
				<a href="http://www.facebook.com/ModelLatina" title="Model Latina" target="<? echo $target ?>">Model Latina</a>
			</div>
		</div>
<?
include("templates/footer.php");
?>