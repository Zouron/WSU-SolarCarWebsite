<?php get_header(); ?>
<section class="container">
			<a name="contact"></a>
			<div class="media-headings gothambold">Contact Us</div>
			<div class="center">
<iframe width="90%" height="450" frameborder="10" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=Solar%20Car%20Project&key=AIzaSyBZA-g-PEqPItW7h3Y6R6ZhbjQNDfu7Y8o" allowfullscreen></iframe></div>
			<div id = "contact_container">
				<div id = "contact">
					<form action="#" method="post" name="form" class="center">
						<input type="text" class="subFName" id = "vname" name="vname" placeholder="Enter Name" required/>
						<br />
						<input type="email" class="subEmail" name="vmail" id = "vmail" placeholder="Enter Email" required/>
						<br />
						<textarea name="message" class="subEmail" rows="4" placeholder="Enter Your Message" required></textarea> <br/><br/>
						<input id="submit" type="submit" name="submit" class = "submit" value="SUBMIT" /><br/><br/>
						&nbsp;&nbsp;Or email us at <strong>contact@solarcar.scem.westernsydney.edu.au</strong>
					</form>
					<?php
					if(isset($_POST["submit"]))
					{
						// Checking For Blank Fields..
						if($_POST["vname"]==""||$_POST["vmail"]==""||$_POST["message"]=="")
						{
							echo "Fill All Fields..";
						}
						else
						{
							// Check if the "Sender's Email" input field is filled out
							$email=$_POST['vmail'];
							// Sanitize E-mail Address
							$email =filter_var($email, FILTER_SANITIZE_EMAIL);
							// Validate E-mail Address
							$email= filter_var($email, FILTER_VALIDATE_EMAIL);
							if (!$email)
							{
								echo "Invalid Sender's Email";
							}
							else
							{
								$message = $_POST['message'];
								$headers = 'From:'. $email . "\r\n"; // Sender's Email
								// Message lines should not exceed 70 characters (PHP rule), so wrap it
								$message = wordwrap($message, 70);
								// Send Mail By PHP Mail Function
								mail("contact@solarcar.scem.westernsydney.edu.au","[Contact from Website]", $message, $headers);
								echo "<p>Your email has been sent successfully! Thank you for your feedback</p>";
							}
						}
					}
				?>
						
			<div>
					<!-- Begin MailChimp Signup Form -->
					
					<form action="//uws.us11.list-manage.com/subscribe/post?u=b6a07cf7fb5a609de48c04c60&amp;id=4c17b21603" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate center" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
						<p>To keep up to date, subscribe to our newsletter:</p>
					<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
					<input type="email" placeholder="Enter Email Address *" name="EMAIL" class="subEmail" id="mce-EMAIL"><br/>
						<input type="text" placeholder="Enter First Name" name="FNAME" class="subFName" id="mce-FNAME"><br/>
						<input type="text" placeholder="Enter Last Name" name="LNAME" class="subLName" id="mce-LNAME"><br/><br/>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b6a07cf7fb5a609de48c04c60_4c17b21603" tabindex="-1" value=""></div>
						<input id="submit" type="submit" name="submit" class = "submit" value="SUBSCRIBE" />
						</div>
					</form>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->				
			</div>
		</section>

<?php get_footer(); ?>