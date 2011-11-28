<?
	$page->title = "Screening Room | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";


	$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
	$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
	$category = isset($_POST["category"]) ? trim($_POST["category"]) : "";
	$message = isset($_POST["message"]) ? trim($_POST["message"]) : "";


	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/screening-ROOMS.png" alt="Contact" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box"     style='padding-left:25px'  >
			
		<h2 >MAKE A DIFFERENCE! GET FREE SWAG!</h2>

		<img src='/assets/images/blogs/CURVYgirls_595x250.jpg' >
		
		<script type="text/javascript" src="http://players.mediasilo.com/swfobject.js"></script><div id="3C40A948-E2AC-D524-BCB3-12F7EB12AE77">You do not meet the requirements to play this video</div><script type="text/javascript">var so = new SWFObject('http://players.mediasilo.com/player5.swf','singleplayer','595','350','9');so.addParam('allowscriptaccess','always');so.addParam('allowfullscreen','true');so.addParam('flashvars','file=http://cf.mediasilo.com/404902549AMBT/036A7489-05B0-4D5F-97D2-F06C0DDE092B.mov&autostart=false&image=http://thumbnails.mediasilo.com/404902549AMBT/9DAE90BF-8FF4-4B66-BA1A-A885874928B4_large.jpg&stretching=exactfit&skin=http://players.mediasilo.com/black.swf');so.write('3C40A948-E2AC-D524-BCB3-12F7EB12AE77');</script>
		
		<br /><br />
		<h2>Check Out <i>Curvy Girls</i>, Get a Cool <i>Model Latina</i> T-shirt!</h2>

<p><span>nuvoTV Insiders hold the same power as any Hollywood honcho when it comes to

making or breaking a new show. So help us shape the best possible content for

nuvoTV by checking out a special preview of <i>Curvy

Girls.</i> The dramatic docu-series is an edgy expose of L.A.'s cutthroat

modeling industry as seen through the eyes of four beautiful Latina plus-size

models -- including <i>Model Latina Las Vegas</i>'

breakout star Lorna. </span></p>



<p><span>Like it,

love it or hate it, we want to know what you think of <i>Curvy Girls</i>. Watch the pilot, then answer four simple questions

below and you'll get not only our most sincere thanks but also a really cool <i>Model Latina</i> T-shirt! </span></p>



	
<style>
iframe#screener_iframe{
width:650px;
height:663px;
border:0px dotted red;
}
</style>
	
<iframe  id='screener_iframe'  scrolling="no" frameBorder="0"   src='http://cms.mynuvotv.com/index.php/questions/ask'>

</iframe>
	
	</div>
	<!--div class="sidebar-right">
		<div class="white-box block">
			<h2>Latest Features</h2>
			<ul class="unstyled">

				<li>
					<div class="meta">
						<h3>Got A Freaky Tatt? Join Our 'Freak-In-Ink' Gallery</h3>
					</div>
					<a href="/series/miami-ink/features" class="no-break">Read More +</a><br /><br />
				</li>
				<li>
					<div class="meta">
						<h3>Get Your Sticky Fingers Over to GetGlue</h3>
					</div>
					<a href="/blog" class="no-break">Read More +</a><br /><br />
				</li>
				<li>
					<div class="meta">
						<h3><i>Model Latina</i>'s Tomiko Takes Hollywood by Storm</h3>
					</div>
					<a href="/blog2" class="no-break">Read More +</a><br /><br />
				</li>
				<li>
					<div class="meta">
						<h3>Top 10 Latin-Flavored American Restaurants.</h3></a>
					</div>
					<a href="/series/mission-menu/features" class="no-break">Read More +</a><br /><br />
				</li>
				<li>
					<div class="meta">
						<h3>Five Extreme Health Food Crazes</h3></a>
					</div>
					<a href="/operation-osmin/blog.php" class="no-break">Read More +</a><br /><br />
				</li>
				<li>
					<div class="meta">
						<h3>Five Things You Didn't Know About Wilmer Valderrama</h3></a>
					</div>
					<a href="/series/pastport-venezuela/features" class="no-break">Read More +</a><br /><br />
				</li>
			</ul>
		</div>
	</div>-->
EOCONTENT;

?>
