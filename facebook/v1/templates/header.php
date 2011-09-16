<?
$page = isset($page) ? $page : "";
$title = isset($title) ? $title : "";
$keywords = isset($keywords) ? $keywords : "";
$description = isset($description) ? $description : "";
$extraHeader = isset($extraHeader) ? $extraHeader : "";
$appId = isset($appId) ? $appId : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<? echo $keywords ?>" />
	<meta name="description" content="<? echo $description ?>" />

	<title><? echo $title ?></title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css?<? echo rand() ?>" />
<?
if ($extraHeader != "" )
	echo $extraHeader . "\n";
?>
</head>
<body id="<? echo $page ?>" class="fb_reset">
	<div id="wrapper">
<? // for clean code formatting ?>