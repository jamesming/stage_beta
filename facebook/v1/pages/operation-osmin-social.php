<?
$page = "operation-osmin-social";
$title = "Operation Osmin";
$url = "http://www.mynuvotv.com/operation-osmin/";
$target = "_top";
$keywords = "";
$description = "";
$appId = "120772774679624";

$vid1 = "1046589112001";	// Osmin_Crazy_V3
$vid2 = "1046589110001";	// Osmin_I_BreakYou_V4
$vid3 = "1046589111001";	// Osmin_Fat_Cheater_V4

if ( $ogtags == "" ) {

$extraHeader = <<<EOHEADER
	<script type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
EOHEADER;

} else {

	$ogtype = "article";
	$ogurl = "http://www.facebook.com/OperationOsmin?sk=app_120772774679624";
	$ogsitename = "NuvoTV";

	if ( $ogtags == "video-1" ) {
		$ogtitle = "WOULD YOU TRAIN WITH A CRAZY PERSON?";
		$ogurl = "http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-10";
		$ogimage = "http://www.mynuvotv.com/facebook/v1/assets/images/thumb-osmin-video-1.jpg";
//		$ogvideo = "http://bcove.me/8qp7lmk7";
		$ogdesc = "Watch as 10 out-of-shape recruits get trained by one of the most psychotic trainers ever.";
	} else if ( $ogtags == "video-2" ) {
		$ogtitle = "OSMIN DOESN'T GIVE A %$#!";
		$ogurl = "http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-2";
		$ogimage = "http://www.mynuvotv.com/facebook/v1/assets/images/thumb-osmin-video-2.jpg";
//		$ogvideo = "http://bcove.me/p5v8hl4o";
		$ogdesc = "He breaks you down before he gets you in shape.";
	} else if ( $ogtags == "video-3" ) {
		$ogtitle = "OSMIN KNOWS WHEN YOU'VE BEEN CHEATING";
		$ogurl = "http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-3";
		$ogimage = "http://www.mynuvotv.com/facebook/v1/assets/images/thumb-osmin-video-3.jpg";
//		$ogvideo = "http://bcove.me/4c7g9fjx";
		$ogdesc = "He watches your every move, but it's all in the name of fitness.";
	} else {
		$ogtitle = "";
		$ogimage = "";
//		$ogvideo = "";
		$ogdesc = "";
	}

$extraHeader = <<<EOHEADER
	<meta property="og:title" content="$ogtitle" />
	<meta property="og:type" content="$ogtype" />
	<meta property="og:image" content="$ogimage" />
	<meta property="og:url" content="$ogurl" />
	<meta property="og:site_name" content="$ogsitename" />
	<meta property="og:description" content="$ogdesc" />
	<meta property="fb:app_id" content="$appId" />
	<script type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
	<script type="text/javascript">
		window.location = "http://www.facebook.com/OperationOsmin?sk=app_120772774679624"
	</script>
EOHEADER;

}
	

include("templates/header.php");
?>
		<div id="header">
			<ul class="nav">
				<li><a href="<? echo $url ?>" target="<? echo $target ?>">Main</a></li>
				<li><a href="<? echo $url ?>about.php" target="<? echo $target ?>">About</a></li>
				<li><a href="<? echo $url ?>osmin.php" target="<? echo $target ?>">Osmin</a></li>
				<li><a href="<? echo $url ?>therecruits.php" target="<? echo $target ?>">The Recruits</a></li>
				<li><a href="<? echo $url ?>episodes.php" target="<? echo $target ?>">Episodes</a></li>
				<li><a href="<? echo $url ?>mobile.php" target="<? echo $target ?>" class="last">Mobile</a></li>
			</ul>
		</div>
		<div class="banner">
			<img src="assets/images/hero-operation-osmin-social.png" alt="HIS TRAINING SHOULD BE ILLEGAL! Share Osmin's insanity with your friends." />
		</div>
		<div id="hero">
			<div class="player">
				<!-- Start of Brightcove Player (single video) -->

				<div style="display:none">
				</div>

				<object id="myExperience3" class="BrightcoveExperience">
					<param name="autoStart" value="false" />
					<param name="bgcolor" value="#FFFFFF" />
					<param name="width" value="322" />
					<param name="height" value="180" />
					<param name="playerID" value="1054696170001" />
					<param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtg7V04qSOpBAWCEs7sNqMj" />
					<param name="isVid" value="true" />
					<param name="isUI" value="true" />
					<param name="dynamicStreaming" value="true" />
					<param name="@videoPlayer" value="<? echo $vid3 ?>" />
					<param name="linkBaseURL" value="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-3" />
				</object>

				<!-- End of Brightcove Player -->

				<div class="fblike">
					<fb:like href="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-3" layout="button_count" send="false" width="282" show_faces="false" font=""></fb:like>
				</div>
			</div>
			<div class="player">
				<!-- Start of Brightcove Player (single video) -->

				<div style="display:none">
				</div>

				<object id="myExperience2" class="BrightcoveExperience">
					<param name="autoStart" value="false" />
					<param name="bgcolor" value="#FFFFFF" />
					<param name="width" value="322" />
					<param name="height" value="180" />
					<param name="playerID" value="1054696170001" />
					<param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtg7V04qSOpBAWCEs7sNqMj" />
					<param name="isVid" value="true" />
					<param name="isUI" value="true" />
					<param name="dynamicStreaming" value="true" />
					<param name="@videoPlayer" value="<? echo $vid2 ?>" />
					<param name="linkBaseURL" value="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-2" />
				</object>

				<!-- End of Brightcove Player -->

				<div class="fblike">
					<fb:like href="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-2" layout="button_count" send="false" width="282" show_faces="false" font=""></fb:like>
				</div>
			</div>
			<div class="player">
				<!-- Start of Brightcove Player (single video) -->

				<div style="display:none">
				</div>

				<object id="myExperience1" class="BrightcoveExperience">
					<param name="autoStart" value="false" />
					<param name="bgcolor" value="#FFFFFF" />
					<param name="width" value="322" />
					<param name="height" value="180" />
					<param name="playerID" value="1054696170001" />
					<param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtg7V04qSOpBAWCEs7sNqMj" />
					<param name="isVid" value="true" />
					<param name="isUI" value="true" />
					<param name="dynamicStreaming" value="true" />
					<param name="@videoPlayer" value="<? echo $vid1 ?>" />
					<param name="linkBaseURL" value="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-10" />
				</object>

				<script type="text/javascript">brightcove.createExperiences();</script>

				<!-- End of Brightcove Player -->

				<div class="fblike">
					<fb:like href="http://www.mynuvotv.com/facebook/v1/operation-osmin-social-video-10" layout="button_count" send="false" width="282" show_faces="false" font=""></fb:like>
				</div>
			</div>
		</div>
		<div id="nodes">
			<a href="http://www.facebook.com/Pastport" title="Pastport" target="<? echo $target ?>">Pastport</a>
			<a href="http://www.facebook.com/ModelLatina" title="Model Latina" target="<? echo $target ?>">Model Latina</a>
		</div>
<?
include("templates/footer.php");
?>