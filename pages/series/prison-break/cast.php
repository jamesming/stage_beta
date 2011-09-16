<?
	$page->title = "Prison Break - Cast | nuvoTV Official Site";
	$page->template = "standard";

	$page->bodyClasses[] = "layout-smb";
		
	$page->components["theme"]  = <<<EOTHEME
		<div class="">

		</div>
EOTHEME;
	
	$page->components["hero"] = <<<EOHERO
	<div class="controls" style="background:transparent url(/assets/images/heroes/series/txt_PrisonBreak.png) no-repeat 0 0; left:360px; top:63px; width:527px; height:120px;">
	</div>
EOHERO;


	$seriesBase = "prison-break";
	$page->components["content"] = <<<EOCONTENT
	<div class="series-nav">
		<ul class="unstyled">
			<li class="first"><a href="/series/$seriesBase">Show</a></li>
			<li class="active"><a href="/series/$seriesBase/cast">Cast</a></li>
			<li><a href="/series/$seriesBase/episodes">Episodes</a></li>
			<li class="last"><a href="/series/$seriesBase/features">Features</a></li>
		</ul>
	</div>
	<div class="sidebar-left">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="main">
		<div class="cast white-box block">
			<h2>Meet the Cast</h2>
			<ul class="unstyled">
				<li class="first block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-michael-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Wentworth Miller (Michael Scofield)</h3>
					</div>
					<p>Miller is one of Hollywood's most intriguing young actors. His breakthrough role came in the Anthony Hopkins-led The Human Stain. Miller is best known for his role as engineer-turned-felon Michael Scofield in Prison Break. Since the show's cancellation, he's appeared in Law & Order: Special Victims Unit and is due to star in this year's Resident Evil: Afterlife.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-lincoln-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Dominic Purcell (Lincoln Burrows)</h3>
					</div>
					<p>Born in England and raised in Australia, Purcell was a gardener before he decided to pursue a career in acting. He's appeared in blockbuster films such Mission Impossible II and Blade: Trinity. In Prison Break he portrays Lincoln Burrows, a man wrongly accused of murder.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-sucre-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Amaury Nolasco (Fernando Sucre)</h3>
					</div>
					<p>Before embarking on an acting career, Nolasco studied biology at the University of Puerto Rico. He's appeared in countless television series (Southland, CSI: NY) and action films (Armored, Max Payne, Street Kings). Nolasco portrays Fernando Sucre in Prison Break.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-veronica-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Robin Tunney (Veronica Donovan)</h3>
					</div>
					<p>The Chicago-bred actress has had several recurring roles in television series such as Law & Order. She landed her first lead role in the teenage witch film The Craft. On Prison Break she plays Veronica Donovan, Burrows' lawyer. She can now be seen on CBS' The Mentalist.</p>
				</li>				
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-tbag-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Robert Knepper (Theodore "T-Bag" Bagwell)</h3>
					</div>
					<p>This accomplished actor has appeared in various roles on television (Law & Order, ER, L.A. Law, CSI: Miami, The West Wing) and film (Transporter 3, The Day the Earth Stood Still). His role as psychopath Theodore "T-Bag" Bagwell on Prison Break drew rave reviews. He is currently on NBC's Heroes.</p>
				</li>
				<li class="block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-brad-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Wade Williams (Brad Bellick)</h3>
					</div>
					<p>Bellick is a character actor whose television credits include NYPD Blue, 24, Six Feet Under, and Monk. Additionally, he appeared in award-winning movies such as Erin Brockovich and Ali. As Capt. Brad Bellick in Prison Break he is one of Michael Scofield's main antagonists.</p>
				</li>
				<li class="last block">
					<img class="bordered media" src="/assets/images/cast/Prison-Break/cast-sara-CAST_148X148.jpg" />
					<div class="meta">
						<h3>Sarah Wayne Callies (Sara Tancredi)</h3>
					</div>
					<p>After countless guest appearances on TV police dramas (Law & Order: Special Victims Unit, Numb3rs), Callies landed a recurring role on Prison Break in 2005. As Dr. Sara Tancredi she develops an interesting relationship with inmate Michael Scofield and eventually helps him escape.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-right">
		<div class="ad ad-box block"></div>
		<div class="facebook block">
			<fb:like-box href="http://www.facebook.com/pages/Prison-Break-on-nuvoTV/173862959343410" width="300" height="475" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</div>
EOCONTENT;

?>