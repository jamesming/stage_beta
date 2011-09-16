<?
	$page->title = "nuvoTV Schedule | nuvoTV Official Site";

	$page->template = "standard";
	$page->bodyClasses[] = "layout-full";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/nu-schedule.png" alt="Nu Schedule" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main block">
		<noscript>This page requires javascript</noscript>
	</div>
EOCONTENT;

?>