<?

	$page->title = "nuvoTV Voices | nuvoTV Official Site";

	$page->template = "standard";
		
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/nu-voices.png" alt="Nu Voices" />
	</div>
EOHERO;


/*
<!--				
				<li>
					<div class="meta">
						<h3>Event Title</h3>
						July 13, 2011, 2-4pm c
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>
						<strong>Grauman's Chinese Theatre</strong><br />
						6925 Hollywood Blvd at Orange Dr<br />
						Los Angeles, CA 90028					
					</p>					
				</li>
-->								
*/


	$page->components["content"] = <<<EOCONTENT
	<div class="social block">
		<div class="facebook">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="240" height="520" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
		<div class="twitter">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  interval: 6000,
			  width: 240,
			  height: 520,
			  theme: {
			    shell: {
			      background: '#ffffff',
			      color: '#1f1e1c'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#1f1e1c',
			      links: '#c4122f'
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: true,
			    live: true,
			    hashtags: true,
			    timestamp: false,
			    avatars: false,
			    behavior: 'default'
			  }
			}).render().setUser('mynuvoTV').start();
			</script>
		</div>
		<div class="tumblr">
			<div class="copy">
				<script type="text/javascript" src="http://nuvotv.tumblr.com/js"></script>
			</div>
		</div>
	</div>
	<div class="sidebar-right block">
		<div class="ad ad-tall block"></div>
	</div>
	<div class="sidebar-left">
		<div class="events white-box block">
			<h2>Upcoming Events</h2>
			<ul class="unstyled">
				<li>
					<div class="meta">
						<h3><a target="_blank" href="/operation-osmin">Operation Osmin Finale</a></h3>
						Tuesday, September 6 9/8c
					</div>
					<p></p>
				</li>
				<li>
					<div class="meta">
						<h3><a target="_blank" href="http://www.chci.org/events/page/2011-reyes-of-comedy">Reyes of Comedy</a></h3>
						September 13, 2011<br />
						Washington, D.C.<br />
						<a href="http://www.livenation.com/event/150046F2C5718D11?camefrom=CFC_BUYAT_kumardevan&brand" target="_blank">Purchase Tickets at LIVENATION</a>
					</div>
					<p></p>
				</li>
				<li>
					<div class="meta">
						<h3><a target="_blank" href="http://www.almaawards2011.com/">Alma Awards</a></h3>
						September 16, 2011<br />
						Los Angeles, CA
					</div>
					<p></p>
				</li>
				<!-- <li>
					<div class="meta">
						<h3>Model Latina Las Vegas 2-Hour Season Premiere</h3>
						Monday, August 15 9/8c
					</div>
					<p></p>
				</li> -->
			</ul>
		</div>		
		<div class="ad ad-box"></div>		
	</div>
	<div class="blogs white-box block">
		<div class="">
			<h2>Latest Blog Posts</h2>
			<ul class="unstyled">
				<li>
					<div class="meta">
						<a href="/operation-osmin/blog.php"><h3>Five Extreme Health Food Crazes</h3></a>
					</div>
					<p>You've heard of the cayenne pepper cleanse, the South Beach Diet, and Osmin's favorite-fish, salad, water-but I bet you've never heard of these whacky health foods. <a href="/operation-osmin/blog.php" class="no-break">Read More +</a></p>
				</li>
				<li>
					<div class="meta">
						<a href="/series/pastport-venezuela/features"><h3>Five Things You Didn't Know About Wilmer Valderrama</h3></a>
					</div>
					<p>You know and love him as Fez from <em>That 70s Show</em>, but I bet you didn't know these cool tidbits about sexy Venezuelan star <strong>Wilmer Valderrama</strong>. Watch as the actor travels back to his homeland and discovers just how much his past shapes his future only on nuvoTV. <a href="/series/pastport-venezuela/features" class="no-break">Read More +</a></p>
				</li>
			</ul>
		</div>
	</div>
EOCONTENT;

?>