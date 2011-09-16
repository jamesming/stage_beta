<?
$page = "pastport";
$title = "Pastport";
$url = "http://www.mynuvotv.com/series/pastport-venezuela";
$target = "_top";
$keywords = "";
$description = "";
$extraHeader = "";	
$appId = "163968453673801";

include("templates/header.php");
?>
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
		<div id="hero">
			<a href="<? echo $url ?>" title="<? echo $title ?>" target="<? echo $target ?>"><? echo $title ?></a>
		</div>
		<div id="nodes">
			<a href="http://www.facebook.com/OperationOsmin" title="Operation Osmin" target="<? echo $target ?>">Operation Osmin</a>
			<a href="http://www.facebook.com/ModelLatina" title="Model Latina" target="<? echo $target ?>">Model Latina</a>
		</div>
<?
include("templates/footer.php");
?>