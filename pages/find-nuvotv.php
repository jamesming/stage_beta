<?
	$page->title = "Get nuvoTV | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/find-nuvotv.png" alt="Find nuvoTV" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box" style="padding-bottom:20px;">
		<div id="get-sitv-iframe">
			<iframe width="640" scrolling="no" height="315" frameborder="0" src="http://sitv.channelfinder.net/petition/">Want to get sitv!</iframe>
		</div>
  	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
	</div>
EOCONTENT;

?>