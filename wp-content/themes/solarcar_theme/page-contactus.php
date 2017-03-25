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
						
			
		</section>

<?php get_footer(); ?>