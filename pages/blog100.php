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

		<img src='/assets/images/blogs/CURVYgirls_595x250.jpg'     >
		
		<!-- Start of Brightcove Player (single video) -->
		
		<div style="display:none">
		</div>
		
		<!--
		By use of this code snippet, I agree to the Brightcove Publisher T and C 
		found at https://accounts.brightcove.com/en/terms-and-conditions/. 
		-->
		
		<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
		
		<object id="myExperience" class="BrightcoveExperience">
		  <param name="bgcolor" value="#FFFFFF" />
		  <param name="width" value="595" />
		  <param name="height" value="350" />
		  <param name="playerID" value="929566596001" />
		  <param name="playerKey" value="AQ~~,AAAAADEdZAY~,VHcBVNPqDVtARWczHNzcyr0e6HXyj-t1" />
		  <param name="isVid" value="true" />
		  <param name="isUI" value="true" />
		  <param name="dynamicStreaming" value="true" />
		  <param name="@videoPlayer" value="1157936297001" />
		  <param name="wmode" value="transparent" />

		
		  
		</object>
		
		<!-- 
		This script tag will cause the Brightcove Player defined above it to be created as soon
		as the line is read by the browser. If you wish to have the player instantiated only after
		the rest of the HTML is processed and the page load is complete, remove the line, if you want to replace the video change the value of @videoPlayer" with a different id# from brightcove.
		-->
		<script type="text/javascript">brightcove.createExperiences();</script>
		
		<!-- End of Brightcove Player -->
		<br /><br />
		<h2>Check Out <i>Curvy Girls</i>, Get a Cool <i>Model Latina</i> T-shirt!</h2>

<p><span><br>

nuvoTV Insiders hold the same power as any Hollywood honcho when it comes to

making or breaking a new show. So help us shape the best possible content for

nuvoTV by checking out a special preview of <i>Curvy

Girls.</i> The dramatic docu-series is an edgy expose of L.A.'s cutthroat

modeling industry as seen through the eyes of four beautiful Latina plus-size

models -- including <i>Model Latina Las Vegas</i>'

breakout star Lorna Litz. </span></p>



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
	<div class="sidebar-right">
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
	</div>
EOCONTENT;

?>




