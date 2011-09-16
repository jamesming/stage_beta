<?
	$page->title = "Contact | nuvoTV Official Site";
	$page->template = "standard";
	$page->bodyClasses[] = "layout-mb";


	$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
	$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
	$category = isset($_POST["category"]) ? trim($_POST["category"]) : "";
	$message = isset($_POST["message"]) ? trim($_POST["message"]) : "";

	$errorMessage = "";
	if (isset($_POST["action"])) {
		
		if (empty($name) || empty($email) || $category == "-1" || empty($message)) {
			$errorMessage = "Error: All fields are required.";
		} else {
			require_once("includes/Rmail/Rmail.php");
			
			$recipient = "websupport@sitv.com";
			$response = "";
			switch($category) {
				case "CASTING":
					$recipient = "websupport@sitv.com";
					$response = "Thanks for your inquiry!\n" .
								"\n" .
								"For the casting information, please be sure to check www.mynuvotv.com/casting. There you'll find the latest updates about casting calls -- both online and around the globe.\n" .
								"\n" .
								"Best of luck to you!\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "SHOW IDEAS":
					$recipient = "sauspitz@sitv.com";
					$response = "We think great ideas come from everywhere; unfortunately, we cannot accept unsolicited show ideas or pitch materials unless they come from one of nuvoTV's recognized agents or production companies.\n" .
								"\n" .
								"Any show suggestions/materials received via our website or through email will be immediately deleted.\n" .
								"\n" .
								"Many thanks for your inquiry and the best of luck to you,\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "COMPLAINTS":
					$recipient = "websupport@sitv.com";
					$response = "We sorry to hear you're dissatisfied.\n" .
								"\n" .
								"Please be assured that we will review your concern and make sure it is addressed by the appropriate internal parties.\n" .
								"\n" .
								"Thanks again for your feedback!\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "SHOW SCHEDULES":
					$recipient = "websupport@sitv.com";
					$response = "We're thrilled to have you as a viewer!\n" .
								"\n" .
								"To find the latest schedules for all our great shows, please visit www.mynuvotv.com/schedule. \n" .
								"\n" .
								"Thanks again!\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "PURCHASING EPISODES":
					$recipient = "websupport@sitv.com";
					$response = "We're thrilled to have you as a viewer!\n" .
								"\n" .
								"Many of your favorite nuvoTV shows are available for viewing online or can be downloaded right to your mobile device. Be sure to visit: www.mynuvotv.com/videos to see what's available.\n" .
								"\n" .
								"Unfortunately, we do not offer our original series on Blu-ray or DVD at this time.\n" .
								"\n" .
								"Thanks for your interest in nuvoTV!\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "CHANNEL LOCATOR":
					$recipient = "websupport@sitv.com";
					$response = "Can't find nuvoTV in your channel lineup? We can help!\n" .
								"\n" .
								"Please visit www.mynuvotv.com/channelfinder/ to locate nuvoTV on your local cable, satellite or telecom provider lineup. All you'll need is your zip code or city/state information, and you're all set. \n" .
								"\n" .
								"Thanks for your interest in nuvoTV!\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "EMPLOYMENT":
					$recipient = "hr@sitv.com";
					$response = "Thanks for your interest in career opportunities at nuvoTV!\n" .
								"\n" .
								"We've forwarded your inquiry to our Human Resources team. In the meantime, if you'd like to check out the latest jobs at nuvoTV, please visit our Job Board at www.mynuvotv.com/careers/\n" .
								"\n" .
								"Many thanks for your inquiry and the best of luck to you,\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "OTHER FEEDBACK":
					$recipient = "websupport@sitv.com";
					$response = "Thanks for your feedback!\n" .
								"\n" .
								"Your comments have been forwarded to our management team.\n" .
								"\n" .
								"All the best,\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "WEBSITE / TECHNICAL ISSUES":
					$recipient = "websupport@sitv.com";
					$response = "Thank you for bringing this to our attention!\n" .
								"\n" .
								"Your comments have been forwarded to our Digital Media team and will be promptly reviewed.\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
				case "ADVERTISING / SALES":
					$recipient = "jsilva@sitv.com";
					$response = "Thank you for your interest in nuvoTV!\n" .
								"\n" .
								"Your request has been forwarded to our Advertising Sales team. We will review your request as soon as possible.	In the meantime, please visit www.mynuvotv.com/advertise to learn more about how we can help you reach your audience.\n" .
								"\n" .
								"-- The MyNuvoTV.com Team";
					break;
			}
			
			$body = "Feedback received from mynuvotv.com contact page.\n\n" .
					"Name: $name\n" .
					"Email: $email\n" .
					"Category: $category\n" .
					"Message: $message\n\n";

// ****************************************
// this is for debug only

//			$body = "recipient: $recipient <br/>" . $body;
//			$recipient = "nate bates <natebates@gmail.com>";
// **********************************************************************

			$toNuvo = new Rmail();
			$toNuvo->setFrom("nuvoTV Feedback <no-reply@mynuvotv.com>");
			$toNuvo->setSubject("Feedback Received");
			$toNuvo->setText($body);
			$toNuvo->setHTML(str_replace("\n", "<br />", $body));
			$result = $toNuvo->send(array($recipient));//, "smtp");

			$toUser = new Rmail();
			$toUser->setFrom("nuvoTV Feedback <no-reply@mynuvotv.com>");
			$toUser->setSubject("Feedback Received");			
			$toUser->setText($response);
			$toUser->setHTML(str_replace("\n", "<br />", $response));
			$result = $toUser->send(array($email));//, "smtp");
			
			header("Status: 200");
			header("Location: contact-thanks");			
		}
	}

	$errorMessage = empty($errorMessage) ? "" : "<p class=\"error-message\">$errorMessage</p>\n";
	
	$page->components["hero"] = <<<EOHERO
	<div class="title">
		<img src="/assets/images/titles/contact.png" alt="Contact" />
	</div>
EOHERO;

	$page->components["content"] = <<<EOCONTENT
	<div class="main white-box">
		<p>Got a question or comment? Fill out the form below and we'll get back to you as soon as possible.</p>
		$errorMessage
		<form method="post" action="contact">
			<label for="name">Name<span class="required-indicator">*</span></label>
			<input type="text" id="name" name="name" value="$name" />
			<label for="email">Email Address<span class="required-indicator">*</span></label>
			<input type="text" id="email" name="email" value="$email" />
			<label for="category">Category<span class="required-indicator">*</span></label>
			<select class="skinned" id="category" name="category">
				<option value="-1">Select a Category from the List...</option>
				<option value="CASTING">CASTING</option>
				<option value="SHOW IDEAS">SHOW IDEAS</option>
				<option value="COMPLAINTS">COMPLAINTS</option>
				<option value="SHOW SCHEDULES">SHOW SCHEDULES</option>
				<option value="PURCHASING EPISODES">PURCHASING EPISODES</option>
				<option value="CHANNEL LOCATOR">CHANNEL LOCATOR</option>
				<option value="EMPLOYMENT">EMPLOYMENT</option>
				<option value="OTHER FEEDBACK">OTHER FEEDBACK</option>
				<option value="WEBSITE / TECHNICAL ISSUES">WEBSITE / TECHNICAL ISSUES</option>
				<option value="ADVERTISING / SALES">ADVERTISING / SALES</option>
			</select>
			<label for="message">Message<span class="required-indicator">*</span></label>
			<textarea id="message" name="message">$message</textarea>
			<button type="submit"><span class="inside"><span class="corner"></span>Submit</span></button>
			<input type="hidden" name="action" id="action" value="" />
		</form>
	</div>
	<div class="sidebar-right">
		<div class="white-box block">
			<h2>Write Us</h2>
			<h3>Los Angeles</h3>
				<p>
				700 N. Central Ave., Suite 600<br />
				Glendale, CA 91203<br />
				323-256-8900<br />
			</p>
			<h3>New York</h3>
			<p>
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




