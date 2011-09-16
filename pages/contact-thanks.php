<?
	$page->title = "Contact | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";

	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/contact.png" alt="Contact" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
		<p>Thanks for dropping us a line! If it's a question you have, someone will get back to you as soon as possible. A comment? We really appreciate your feedback.</p>
	</div>
	<div class="sidebar-right">
		<div class="white-box block">
			<h2>Write Us</h2>
			<p>
				Los Angeles<br />
				700 N. Central Ave., Suite 600<br />
				Glendale, CA 91203<br />
				323-256-8900<br />
			</p>
			<p>
				New York<br />
				450 Seventh Ave., Suite 1001<br />
				New York, NY 10123<br />
			</p>
			<h2>Find Us Online</h2>
			<ul class="unstyled social-list block">
				<li class="facebook"><a href="#"><span></span><h3>Find us on Facebook</h3></a></li>
				<li class="twitter"><a href="#"><span></span><h3>@nuvotv on Twitter</h3></a></li>
				<li class="myspace"><a href="#"><span></span><h3>Find us on MySpace</h3></a></li>
			</ul>
		</div>
	</div>
EOCONTENT;

?>




