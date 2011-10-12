<?
	$page->title = "Contact | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";


	$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
	$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
	$category = isset($_POST["category"]) ? trim($_POST["category"]) : "";
	$message = isset($_POST["message"]) ? trim($_POST["message"]) : "";

	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/PRESS.png" alt="Contact" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
<b><span class="Apple-style-span" style="font-weight: normal; "><font class="Apple-style-span" face="arial" style="font-size: medium; ">
</font>
<p style="font-size: medium; "><font size="3" face="arial"><b>THE nuvoTV MISSION</b><br /><font size="3">nuvoTV is the first and only English-language television network created for American Bi-cultural Latinos 18-49A.&nbsp; We are committed to providing groundbreaking, high quality entertainment that engages and connects with this powerful audience.</font>&nbsp;<br /></font></p>
<p style="font-size: medium; "></p>
<p style="font-size: medium; "><font size="3" face="arial"><b>ABOUT nuvoTV</b><br /><b>Vibrant.&nbsp; Bold.&nbsp; Driven.</b><br /><font size="3">"nuvo" is formed by the fusion of&nbsp; "NUevo" and VOice" reflecting the dual cultural pillars of today's American Bi-Cultural Latinos.&nbsp; nuvoTV serves the Bi-cultural Latino audience with culturally relevant entertainment that speaks to our viewers in their language of choice - English!&nbsp; With our unique line-up, all shot in HD, nuvoTV is truly a new television network for America's Nu Voice.&nbsp;</font>&nbsp;<br /></font></p>
<p style="font-size: medium; "><font class="Apple-style-span" face="arial"><font size="3">Online,&nbsp;<a href="http://mynuvotv.com/">MYNUVOTV.COM</a>&nbsp;offers an engaging interactive experience for our unique programming.&nbsp; nuvoTV also connects with Bi-cultural Latinos across multiple platforms with VOD, mobile and interactive tablet apps.</font><br /></font></p>
<p style="font-size: medium; "><font class="Apple-style-span" face="arial"></font></p>
<p><font class="Apple-style-span" face="arial"><font size="3" style="font-size: medium; "><b>RECENT PRESS RELEASES</b>&nbsp;</font><font size="1">(to view PDF files, please use the free <a href='http://get.adobe.com/reader/' target='_blank'>Adobe Acrobat Reader</a>)</font><font size="3" style="font-size: medium; ">.&nbsp;</font><font class="Apple-style-span" size="3">&nbsp;</font><br /></font></p>
<p><font class="Apple-style-span" face="arial"></font></p>
</span></b><b><span class="Apple-style-span" style="font-weight: normal; ">


<p></p>
<p style="font-size: medium; "><font size="3" face="arial">08/30/2011<br /><font size="3">
<a target='_blank' href='http://cms.mynuvotv.com/uploads/pdfs/nuvoTV-PastPort Puerto Rico_8_30_11.pdf'><i>Pastport: Puerto Rico</i>: Latest Installment of nuvoTV's Groundbreaking "Pastport" Series to Premiere during Hispanic Heritage Month</a></font><br /></font></p>
<p style="font-size: medium; "></p>



<p style="font-size: medium; "></p>
</span></b><b><span class="Apple-style-span" style="font-weight: normal; ">
<p style="font-size: medium; "><font size="3" face="arial">08/16/2011<br />
<font size="3"><a target='_blank' href='http://cms.mynuvotv.com/uploads/pdfs/nuvoTV-Osmin Series Renewal_8_30_11.pdf'>'The World's Most Psychotic Trainer' Adds Muscle to the Success of nuvoTV Re-Launch</a></font></font></p>
</span></b><b><span class="Apple-style-span" style="font-weight: normal; ">



<p style="font-size: medium; display: inline !important; "><font size="3" face="arial">08/05/2011</font></p>
</span></b>
<div><b><span class="Apple-style-span" style="font-weight: normal; ">
<p style="display: inline !important; "><font size="3" face="arial" style="font-size: medium; "><a target='_blank' href='http://cms.mynuvotv.com/uploads/pdfs/nuvoTV_Model_Latina_IV_Trade_Release_8_5_11.pdf'>nuvoTV REALITY HIT&nbsp;<i>MODEL LATINA</i>&nbsp;TAKES ON LAS VEGAS</a></font></p>
</span></b>
<div><b>
<span class="Apple-style-span" style="font-weight: normal; ">
<b>
<span class="Apple-style-span" style="font-weight: normal; ">
<p style="font-size: medium; display: inline !important; "><font class="Apple-style-span" face="arial"><font size="3"><a target='_blank' href='http://cms.mynuvotv.com/uploads/pdfs/nuvoTV_Model_Latina_IV_Trade_Release_8_5_11.pdf'>ALL-NEW SEASON PREMIERES AUGUST 15</a></font></font></p>
</span></b>




<p style="font-size: medium; "><font class="Apple-style-span" face="arial"></font></p>
</span></b></div></div>
	</div>
	<div class="sidebar-right">
		<div class="white-box block">
			<h2>Press Contact</h2>

			Tom Van Wie<br />nuvoTV<br />700 N. Central Avenue, Suite 600<br />Glendale, CA 91203<br />323-543-2749<br /><a href="mailto:tvanwie@mynuvotv.com" target="_blank">tvanwie@mynuvotv.com</a>

			<br /><br />
			<h2>Find Us Online</h2>
			<ul class="unstyled social-list block">
				<li class="facebook"><a target="_blank" href="http://www.facebook.com/nuvoTV"><span></span><h3>Find us on Facebook</h3></a></li>
				<li class="twitter"><a target="_blank" href="http://twitter.com/mynuvoTV"><span></span><h3>@nuvotv on Twitter</h3></a></li>
				<li class="myspace"><a target="_blank" href="http://www.myspace.com/nuvotv"><span></span><h3>Find us on MySpace</h3></a></li>
			</ul>
		</div>
	</div>
EOCONTENT;

?>




