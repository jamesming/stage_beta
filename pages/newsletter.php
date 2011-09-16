<?
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/newsletter.png" alt="Newsletter" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
Stay connected to nuvoTV, America's Nu Voice, by entering your email address below. You'll instantly be signed up to receive updates on nuvoTV shows, movies, info on exclusive events, sweepstakes, and contests. Plus, you'll be the first to hear about castings for our reality shows!
<br /><br />
Please email us at <a href="mailto:sbascetta@mynuvotv.com">sbascetta@mynuvotv.com</a> to be added to our newsletter. 
	            </div>
EOCONTENT;

?>