<?
$page = "operation-osmin";
$title = "Operation Osmin";
$url = "http://www.mynuvotv.com/operation-osmin/";
$target = "_top";
$keywords = "";
$description = "";
$extraHeader = "";	
$appId = "254379571243975";

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
		<div id="hero">
			<a href="<? echo $url ?>" title="<? echo $title ?>" target="<? echo $target ?>"><? echo $title ?></a>
		</div>
		<div id="nodes">
			<a href="http://www.facebook.com/Pastport" title="Pastport" target="<? echo $target ?>">Pastport</a>
			<a href="http://www.facebook.com/ModelLatina" title="Model Latina" target="<? echo $target ?>">Model Latina</a>
		</div>
<?
include("templates/footer.php");
?>