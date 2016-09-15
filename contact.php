<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Suncoast Martial Arts - Contact</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/cutestrap.css">
	<link rel="stylesheet" href="assets/css/flickity.css">
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/vendor/flickity.pkgd.min.js"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> -->
</head>
<body id="body-contact">
	<div id="site-wrapper">
		<div id="site-canvas">
			<!-- off canvas menu for mobile-->
			<?php include('php_includes/scma_header.php'); ?>
			
			<main class="wrapper">
				<section class="grid grid--medium content--left">
					<div class="column--heavy">
						<h4>Thank you for your interest.</h4>
						<p>To sign up for our Classes, After School Program and/or Summer Camp, please 
							complete the form below. We look forward to hearing from you soon.</p>
						<h4>Suncoast Martial Arts</h4>
						<em>Building integrity since 1995...one belt at a time.</em>
						<address>
							1901 13th Ave N<br>
							St Petersburg, FL 33713<br>
							<a href="tel:+17273279800">(727) 327-9800</a><br>
						</address>             
						<form action="" id="contact_form" method="post" role="form" class="">
							<div>
								<label for="name" class="">Name</label>
								<input type="text" id="name" name="name" required>
								<p class="validation01">
									<span class="valid" style="color: green">&#10004;</span>
									<span class="invalid" style="color: #900">&#10008;</span>
								</p>
							</div>
							<div>
								<label for="email" class="">Email</label>
								<input type="email" id="email" name="email" value="" class="form-control" required>
								<p class="validation01">
									<span class="valid" style="color: green">&#10004;</span>
									<span class="invalid" style="color: #900">&#10008;</span>
								</p>
							</div>
							<div>
								<label for="program_type" class="">Program Type</label>
								<select id="program_type" name="program_type">
									<option value="children" checked>Children</option>
									<option value="adult" checked>Adult</option>
								<select>
							</div>
							<div>
								<label for="message" class="">Message</label>
								<textarea id="message" name="message" value="" class="form-control" required></textarea>
								<p class="validation01">
									<span class="valid" style="color: green">&#10004;</span>
									<span class="invalid" style="color: #900">&#10008;</span>
								</p>
							</div>
							<div>
								<button class="">Send</button>
							</div>
						</form>
					</div>
					<?php include('php_includes/scma_right_colum.php'); ?>
				</section>
			</main>
			<?php include('php_includes/scma_footer.php'); ?>
		</div><!-- end #site-canvas -->
	</div><!-- end #site-wrapper -->
	<script src="assets/js/main.js"></script>	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
		 NOT YET :)
	
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X','auto');ga('send','pageview');
	</script>-->
	
</body>
</html>
