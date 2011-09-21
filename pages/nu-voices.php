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
	
	<a target='_blank' href='https://www.facebook.com/nuvoTV'>
		<div class="facebook">
			<fb:like-box href="http://www.facebook.com/nuvoTV" width="240" height="520" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
		</div>
	</a>
	<a target='_blank' href='http://twitter.com/#!/mynuvoTV'>
		<div class="twitter">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  interval: 6000,
			  width: 240,
			  height: 480,
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
		</a>
		
		<script type="text/javascript" language="Javascript">
				function open_tumblr(){
					onclick=open("http://nuvotv.tumblr.com/", 1 ); 
				}
		</script>

			<div class="tumblr"  onclick=open_tumblr() style='cursor:pointer' >
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
				<!--<li>
					<div class="meta">
						<h3><a target="_blank" href="/operation-osmin">Operation Osmin Season Finale</a></h3>
						Tuesday, September 6 9/8c
					</div>
					<p></p>
				</li> -->
				<!--<li>
					<div class="meta">
						<h3><a target="_blank" href="http://www.chci.org/events/page/2011-reyes-of-comedy">Reyes of Comedy</a></h3>
						September 13, 2011<br />
						Washington, D.C.<br />
						<a href="http://www.livenation.com/event/150046F2C5718D11?camefrom=CFC_BUYAT_kumardevan&brand" target="_blank">Purchase Tickets at LIVENATION</a>
					</div>
					<p></p>
				</li>-->
				<li>
					<div class="meta">
						<h3>Walter Kaitz Fundraiser Dinner - New York, NY</h3>
						Wednesday, October 5
					</div>
					<p></p>
				</li>
				<li>
					<div class="meta">
						<h3>Hispanic Women's Conference - Phoenix, AZ</h3>
						Friday, October 7
					</div>
					<p></p>
				</li>
				<li>
					<div class="meta">
						<h3>Mission Menu Season Premiere</h3>
						Tuesday, October 18
					</div>
					<p></p>
				</li>
				<li>
					<div class="meta">
						<h3>Chicago Latino Fashion Week - Chicago, IL</h3>
						Friday, November 4 & Saturday, November 5
					</div>
					<p></p>
				</li>
				<!--<li>
					<div class="meta">
						<h3><a target="_blank" href="http://www.almaawards2011.com/">Alma Awards</a></h3>
						September 16, 2011<br />
						Los Angeles, CA
					</div>
					<p></p>
				</li>-->
			</ul>
		</div>		
		<div class="ad ad-box"></div>		
	</div>
	<div class="blogs white-box block">
		<div class="">
			<h2>Latest Blog Posts</h2>
			<ul class="unstyled">
				<!--<li>
				<div class="meta">
						<a target="_blank" href="http://www.livenation.com/event/150046F2C5718D11?camefrom=CFC_BUYAT_kumardevan&brand"><h3>Paul Rodriguez Tells Us Why He's So Funny</h3></a>
					</div>
					<p><b>You're hosting the 11th Annual Reyes of Comedy event in Washington D.C. Why should everyone buy tickets?</b><br />Because there's nothing else to do. I don't know. 'Cause I'm funny? 'Cause I got child support payments? It's a good show. I think you'd like it. It's for the NCLR, an organization that's been pro-Hispanic issues for a very long time.<br />

<br /> <b>Your show Mis Videos Locos With Paul Rodriguez captures crazy stuff Latinos do. What's the craziest thing a Latino's ever done?</b> Buy Cabbage Patch Kids for the birth certificates. I guess the craziest one I've seen is a guy having sex with a pi&ntilde;ata. That was pretty out there. <br />

<br /> <b>What do you think about Katt Williams' recent racial tirade against Mexicans?</b> He said that if you love Mexico, then go back. I kinda agree. Anyone who heckles a comedian is going to a gunfight with a stick. He might've gone too far for my political views, but he had a right to say what he did. He got heckled and that's a cardinal sin. As far as him saying, 'If we love California so much then why didn't we hang on to it?' I think we have. I don't think he's seen the Census results. I know Katt and I've always gotten along with him. He's a comedian, so I take it with a grain of salt. <br />

<br /> <b>What's the secret to being one of the best standup comedians of all time?</b> Perseverance, staying relevant, and going to the library more often than Katt Williams. <br />

<br /> <b>Do you ever skateboard with your son?</b> The economy's bad, but not that bad. No, I don't skateboard. I'm 57. My kid skates for both of us. He's very well off. It's nice to have a son to cosign and borrow money from. He's going to retire soon. He's 26! Can you imagine that?! <br />

<br /> <b>What superstition can't you get over?</b> [Laughs] I'm so superstitious. I don't like black cats. I don't eat meat on the 13th. I don't like 13 floors. I guess I got it from my mom. She's a Mexican Santeria kind of woman. <br />

<br /> <b>What's the one thing you find all Latinos have in common?</b>  Identity crises. We can't agree on what to call ourselves. Are we Latinos? Hispanics? Americans? Brown? Chicano? If you're rich, of course, you're Cuban. [Laughs]
 <a target="_blank" href="http://www.livenation.com/event/150046F2C5718D11?camefrom=CFC_BUYAT_kumardevan&brand" class="no-break">Purchase Tickets Now! +</a></p>
				</li>-->
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