    <div id="content-container">
        <div id="content">
	        	<?php
				    $fullname = $_POST['fullname'];
				    $email = $_POST['email'];
				    $message = $_POST['message'];
				    $from = 'From: mbroomell.com'; 
				    $to = 'mtbroomell@gmail.com'; 
				    $subject = 'Contact Me';

				    $body = "From: $fullname\n E-Mail: $email\n Message:\n $message";
				?>
			<form method="post" action="?page_id=15">
        
					<?php		 
				        if (mail ($to, $subject, $body, $from)) { 
					    echo '<p>Your message has been sent!</p>';
					} else { 
					    echo '<p>Something went wrong, go back and try again!</p>'; 
					} 
					?>

			    <label>Name</label>
			    <input name="fullname" placeholder="Type Here" required>

			    <label>Email</label>
			    <input name="email" type="email" placeholder="Type Here" required>

			    <label>Message</label>
			    <textarea name="message" placeholder="Type Here" required></textarea>
				
				<br>

			    <input id="submit" name="submit" type="submit" value="Submit">

			</form>
        </div> <!-- #content -->
    </div><!-- #content-container -->
