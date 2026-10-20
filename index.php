<?php
	session_start();
	include("library/class_email_sender.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Junry Zabate - Freelance Web Developer from Cebu City, Philippines</title>
	<meta name="description" content="Freelance Web Developer, WordPress Developer, Web Developer from Cebu City, Philippines">
	<link rel="shortcut icon" href="me.ico">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300' rel='stylesheet' type='text/css'>
</head>
<body class="ux">
	<div class="bg-overlay"></div>
	<!-- Preloader start here -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<div class="about-us">
		<a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg"
			data-placement="right" title="About"></a>
	</div>
	<div class="contact-us">
		<a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"
			data-placement="left" title="Contact"></a>
	</div>
	<section class="container main-wrapper">
		<section id="logo" class="fade-down">
			<a href="http://junryzabate.com" title="Junry Zabate - Freelance Web Developer from Cebu City, Philippines">
				<img src="img/logo.jpg" alt="Junry Zabate - Freelance Web Developer from Cebu City, Philippines">
			</a>
		</section>
		<section class="slogan fade-down">
			<h1>Uh oh!</h1>
			<p>Dark side is at it again destroying things in the galaxy. I'll need the help of a Jedi, Oh! wait I'm a
				Jedi myself. Will create a new awesome site, subscribe to be notified.</p>
		</section>
		<section class="count-down-wrapper fade-down">
			<ul class="row count-down">
				<li class="col-md-3 col-sm-6">
					<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260"
						data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6"
						data-angleOffset="180">
					<span id="days-title">days</span>
				</li>
				<li class="col-md-3 col-sm-6">
					<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260"
						data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6"
						data-angleOffset="180">
					<span id="hours-title">hours</span>
				</li>
				<li class="col-md-3 col-sm-6">
					<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260"
						data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6"
						data-angleOffset="180">
					<span id="mins-title">minutes</span>
				</li>
				<li class="col-md-3 col-sm-6">
					<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260"
						data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6"
						data-angleOffset="180">
					<span id="secs-title">seconds</span>
				</li>
			</ul>
			<p>Countdown to finish my training as a jedi.</p>
		</section>
		<section class="newsletter row fade-down" style="display: none;">
			<!-- Begin MailChimp Signup Form -->
			<style type="text/css">
				#mc_embed_signup {
					clear: left;
					font: 14px Helvetica, Arial, sans-serif;
				}
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<form
				action="//junryzabate.us13.list-manage.com/subscribe/post?u=39d76c1dc9dea76691bb19e99&amp;id=7af0e0af23"
				method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
				class="contact col-md-6 fade-down validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll" class="form-group">
					<div>
						<span class="email-ico"> <i class="fa fa-envelope-o"></i> </span>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"
							placeholder="Enter your email here to stay tuned">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
							name="b_39d76c1dc9dea76691bb19e99_7af0e0af23" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Submit" name="submit" id="mc-embedded-subscribe"
							class="btn-submit"></div>
				</div>
			</form>
			<script type='text/javascript' src='js/mc-validate.js'></script>
			<script type='text/javascript'>(function ($) { window.fnames = new Array(); window.ftypes = new Array(); fnames[0] = 'EMAIL'; ftypes[0] = 'email'; }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
		</section>
		<ul class="connect-us row fade-down">
			<li><a href="https://www.facebook.com/junry.zabate" class="fb tool-tip" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/junDesigner" class="twitter tool-tip" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://plus.google.com/109868597234822692076" class="gplus tool-tip" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="https://ph.linkedin.com/in/junryzabate" class="linkedin tool-tip" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCCXcd4-F_ZzYJV4RherodjA" class="ytube tool-tip" title="Youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
			<li><a href="https://www.instagram.com/hellslasher/" class="insta tool-tip" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<footer class="fade-down">
			<p class="footer-text"><a href="http://junryzabate.com">junryzabate.com</a> &copy; <?php echo date('Y'); ?>,
				All Rights Reserved. Background image by <a href="https://www.nasa.gov/" target="_blank">NASA</a>.</p>
		</footer>
	</section>
	<div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true"
		data-backdrop="static" tabindex="-1">
		<a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
		<div class="modal-dialog modal-lg clearfix">
			<div class="modal-content pop-up">
				<h3>About Me</h3>
				<div class="clearfix">
					<div>
						<p>Ohh! I really don't know what to say here. I'm a WordPress developer. You can ask my mom, my
							brother or my <a href="http://greenlapok.com" target="_blank">friend</a>.</p>
					</div>
				</div>
				<h6 class="features-title">Skills:</h6>
				<ul class="features">
					<li>Basic Web Design using Adobe Creative Tools</li>
					<li>HTML and CSS Coding (W3C Compliant)</li>
					<li>Fully Responsive Desktop &amp; Mobile Front End Development</li>
					<li>XHTML / CSS Cross-browser (IEs, Firefox, Chrome, Safari)</li>
					<li>PHP, jQuery &amp; Javascript</li>
					<li>PSD to WordPress Conversion</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true"
		data-backdrop="static" tabindex="-1">
		<a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
		<div class="modal-dialog modal-lg">
			<div class="modal-content pop-up pop-up-cnt">
				<h3>Contact Me</h3>
				<!--Email Sending Script not displayed -->
				<?php
					$name = "";
					$from = "";
					$message = "";
					if (isset($_POST['submit'])) {
						$name = mysql_real_escape_string($_POST['name']);
						$from = mysql_real_escape_string($_POST['email']);
						$message = mysql_real_escape_string($_POST['comments']);
						$code = $_SESSION['captcha'];
						$captcha = mysql_real_escape_string($_POST['captcha']);
						$to = "hello@junryzabate.com"; // Add your e-mail here
						if ($code != $captcha) {
							echo '<script>alert("Invalid Captcha");</script>';
						} else {
							include("library/send_email.php");
						}
						//Isset finishes here	
					}
				?>
				<!-- Contact Form not displayed -->
				<div class="clearfix cnt-wrap" style="display: none;">
					<form id="contactform" name="contactform" action="" method="post">
						<div id="result"></div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
							<input type="text" id="name" placeholder="Name" name="name" value="<?php echo $name; ?>"
								required>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
							<input type="text" id="email" placeholder="Email" name="email" value="<?php echo $from; ?>"
								required>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
							<textarea id="comments" name="comments" placeholder="Message"
								required><?php echo $message; ?></textarea>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
							<img src="captcha.php"><br>
							<input type="text" name="captcha" placeholder="captcha" required>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">
							<button name="submit" id="submit" class="contact-btn-submit" type="submit">Send</button>
						</div>
					</form>
				</div>

				<div class="clearfix cnt-wrap">
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-phone"></i>
						<h4>Skype me</h4>
						<p>Skype: junry.zabate</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-envelope-o"></i>
						<h4>Email</h4>
						<p><a href="mailto:hello@junryzabate.com">hello@junryzabate.com</a></p>
					</div>
					<div class="col-md-4 col-sm-4">
						<i class="fa fa-map-marker"></i>
						<h4>Address</h4>
						<p>
							Lower Camparang, Kalunasan,<br>
							Cebu City<br>
							Philippines 6000<br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Javascript framework and plugins start here -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.ccountdown.js"></script>
	<script src="js/init.js"></script>
	<script src="js/general.js"></script>
</body>
</html>