<?




	$time_start = microtime(true);

	// prevent simple hacking attempts -- someone trying to access files directly
	//	if (substr($pageID, 0, 1) == "/" || stristr($pageID, "..") !== FALSE) $pageID = "error";

	// error reporting
	ini_set('display_errors', '1');
	error_reporting(E_ALL ^ E_STRICT);
//	date_default_timezone_set('America/New_York');

	// determin which page to render
	$pageID = strtolower(isset($_GET["pageID"]) ? $_GET["pageID"] : "");
	if ($pageID == "") {
		$pageID = "home";
	}



	// check if we need to redirect
	require_once("includes/redirects.php");

	require_once("includes/components.php");
	require_once("includes/page.php");
	$page->init($pageID);
	
	// include page content
	$pagefile = "pages/" . $pageID . ".php";
	if (file_exists($pagefile)) {
		include($pagefile);
	} else {
		include("pages/error404.php");
	}
	



	if (!empty($page->template)) {
		include("templates/{$page->template}.php");
		$template->render();
	} else {
		echo $page->components["raw"];
	}
	
	

	
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "<!-- render time: $time seconds -->";
?>