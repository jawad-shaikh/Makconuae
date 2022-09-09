<?php include "partials/head.php" ?>

<main class="main-wrapper">

	<?php include "partials/header.php" ?>

	<div class="content-wrapper content-wrapper--boxed oh">

		<!-- Page Title -->
		<section class="page-title bg-dark-overlay text-center" style="background-image: url(img/construction/1.jpg);">
			<div class="container">
				<div class="page-title__holder">
					<h1 class="page-title__title">Contact</h1>
				</div>
			</div>
		</section> <!-- end page titl -->

		<!-- Contact -->
		<section class="section-wrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact">
							<h5 class="contact__title">Melbourne Office</h5>
							<ul class="contact__items">
								<li class="contact__item">
									<span class="contact__item-label">Address:</span>
									<address>Address:Office no.401 Mai tower <br> Al Nahda 1 Dubai UAE.</address>
								</li>
								<li class="contact__item">
									<span class="contact__item-label">Phone: </span>
									<a href="tel:+1-800-1554-456-123">+9714 3551897</a>
									<br>
									<a href="tel:+1-800-1554-456-123">+9715 04977346</a>
								</li>
								<li class="contact__item">
									<span class="contact__item-label">Email: </span>
									<a href="#">support@makcon.com</a>
								</li>
							</ul>

							<h5 class="contact__title mt-40">Follow Us</h5>
							<div class="socials">
								<!-- <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a> -->
								<a href="https://www.facebook.com/makcontechdubai/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
								<!-- <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a> -->
								<a href="https://www.instagram.com/makcon_contractors/" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
							</div>

						</div>
					</div>
					<div class="col-lg-7 offset-lg-1">
						<h2 class="section-title">Give Us A Message</h2>
						<p class="mb-40">If you have any question about project cost, get in touch.</p>
						<!-- Contact Form -->
						<form id="contact-form" class="contact-form material" method="post" action="#">

							<div class="row">
								<div class="col-lg-6">
									<!-- Name -->
									<div class="material__form-group form-group">
										<input type="text" name="name" id="name" class="form-input material__input" required="">
										<label for="name" class="material__label">Name
											<abbr title="required" class="required">*</abbr>
										</label>
										<span class="material__underline"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<!-- Email -->
									<div class="material__form-group form-group">
										<input type="email" name="email" id="email" class="form-input material__input" required="">
										<label for="email" class="material__label">Email
											<abbr title="required" class="required">*</abbr>
										</label>
										<span class="material__underline"></span>
									</div>
								</div>
							</div>

							<!-- Subject -->
							<div class="material__form-group form-group">
								<input type="text" name="subject" id="subject" class="form-input material__input">
								<label for="subject" class="material__label">Subject
								</label>
								<span class="material__underline"></span>
							</div>

							<div class="material__form-group form-group">
								<textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
								<label for="message" class="material__label">Message
									<abbr title="required" class="required">*</abbr>
								</label>
								<span class="material__underline"></span>
							</div>

							<input type="submit" name="sendBtn" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
							<div id="msg" class="message"></div>
						</form>

						<?php

						if (isset($_POST['sendBtn'])) {
							$name = $_POST['name'];
							$email = $_POST['email'];
							$subject = $_POST['subject'];
							$message = $_POST['message'];

							$to = "jawad@aetsmsoft.com";
							$mailsubject = "Message from client $name";
							$header = "From:$email";

							$retval = mail($to, $mailsubject, $message, $header);

							if ($retval == true) {
						?>
								<div class="alert alert-success">
									<strong>Successfully</strong> Message sent
								</div>
							<?php
							} else {
							?>
								<div class="alert alert-danger">
									Message could not be sent
								</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</section> <!-- end contact -->


		<!-- Google Map -->
		<center>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3607.4774395015365!2d55.36553955078125!3d25.288158416748047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c66a0b1662b%3A0x6d3dcadaa24a354b!2sMai%20Tower!5e0!3m2!1sen!2s!4v1653239538424!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</center>

		<br><br><br>

		<?php include "partials/footer.php" ?>

		<div id="back-to-top">
			<a href="#top"><i class="ui-arrow-up"></i></a>
		</div>

	</div> <!-- end content wrapper -->
</main> <!-- end main wrapper -->


<!-- jQuery Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<!-- 
		1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
		2. Paste your key in the script below.
	-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/google-map.js"></script>
<script src="js/scripts.js"></script>

</body>

</html>