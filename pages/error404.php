<?
	header("HTTP/1.0 404 Not Found");

	require_once('db_include.php');
	
	mysql_query("INSERT INTO custom_404_errors VALUES('', '$_SERVER[REQUEST_URI]', NOW(), 0) ");
	
	$page->title = "Page Not Found | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";
	$page->bodyClasses[] = "error-404";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/page-not-found.png" alt="Page Not Found" />
	</div>
EOHERO;

/*	
	// try to get the sidebar based on what class you're in
	$sidebar = getSidebarByClass($page->section);
	if ($sidebar !== FALSE) {
		$page->components["sidebar"] = $sidebar;
	} else {
		$page->components["sidebar"] = getSidebarByClass("basic");
	}
*/
	$page->components["content"] = <<<EOCONTENT
	<div class="main block">
		<h2>Error: 404</h2>
		<h3>Sorry!  The page you're looking for cannot be found</h3>
	</div>
EOCONTENT;
	
?>