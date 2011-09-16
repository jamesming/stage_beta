<?
$page = "model-latina";
$title = "Model Latina Las Vegas";
$url = "http://www.mynuvotv.com/model-latina-las-vegas/";
$target = "_top";
$keywords = "";
$description = "";
$extraHeader = "";	
$appId = "174229732639326";

include("templates/header.php");
?>
		<div id="header">
			<a href="<? echo $url ?>" target="<? echo $target ?>"></a>
<!--
			<ul class="nav">
				<li><a href="<? echo $url ?>#home" target="<? echo $target ?>">Home</a></li>
				<li><a href="<? echo $url ?>#about" target="<? echo $target ?>">About</a></li>
				<li><a href="<? echo $url ?>#mansion" target="<? echo $target ?>">Mansion</a></li>
				<li><a href="<? echo $url ?>#photos" target="<? echo $target ?>">Photos</a></li>
				<li><a href="<? echo $url ?>#videos" target="<? echo $target ?>">Videos</a></li>
				<li><a href="<? echo $url ?>#extras" target="<? echo $target ?>">Extras</a></li>
			</ul>
-->
		</div>
		<div id="hero">
			<a href="<? echo $url ?>" title="<? echo $title ?>" target="<? echo $target ?>"><? echo $title ?></a>
		</div>
		<div id="nodes">
			<a href="http://www.facebook.com/Pastport" title="Pastport" target="<? echo $target ?>">Pastport</a>
			<a href="http://www.facebook.com/OperationOsmin" title="Operation Osmin" target="<? echo $target ?>">Operation Osmin</a>
		</div>
<?
include("templates/footer.php");
?>