<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Suncoast Martial - Calendar and Special Events</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/cutestrap.css">
	<link rel="stylesheet" href="assets/css/flickity.css">
	<style>
		.scma_calendar {
			font-family: arial, helvetica, sans-serif;
			font-size: 1.25rem;
			border-left: 1px solid #000;
			border: 1px solid black;		
		}

		.scma_calendar tr:last-child {
			border-bottom: 0;
		}

		.scma_calendar th {
			background: #CCC;
			padding: 5px 3px 2px;
			border-right: 1px solid #000;
			border-bottom: 1px solid #000;
			text-align: center;
			font-weight: bold;
		}

		.scma_calendar th:last-child {
			border-right: 0;
		}

		.scma_calendar td {
			text-align: center;
			padding: 0.75rem 0.4rem;
			border-right: 1px dotted #000;
			border-bottom: 1px dotted #000;
			line-height: 1.5rem;
			height: 5rem;
		}

		.scma_calendar .after { color: #7FA3FF; }

		.scma_calendar .children { color: #b15cb9; }

		.scma_calendar .adult { color: #FF8A1C; border-bottom: 0; }

		.scma_calendar .pee-wee { color: #F23E3E; }

		.scma_calendar .tai-chi { color: #49AF9A;}
	</style>
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/vendor/flickity.pkgd.min.js"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> -->
</head> 
<body id="body-calendar">
	<div id="site-wrapper">
		<div id="site-canvas">
			<!-- off canvas menu for mobile-->
			<?php include('php_includes/scma_header.php'); ?>
			
			<main class="wrapper">
				<section class="grid content--left">
					<div>
						<h2>Class Schedules</h2>
						<table class="scma_calendar" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saturday</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td class="tai-chi">&nbsp;</td>
									<td class="tai-chi">
										Tai Chi lesson<br>
											8:00 - 9:00am
									</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td class="tai-chi" rowspan="8" style="border: 0;">
										Tai Chi lesson<br>
										9:00 - 10:00am
									</td>
								<tr>
								<tr>
									<td class="after">
										After School Program<br>
										3:00 - 6:00pm
									</td>
									<td class="after">After School Program<br>
										3:00 - 6:00pm</td>
									<td class="after">After School Program<br>
										3:00 - 6:00pm</td>
									<td class="after">After School Program<br>
										3:00 - 6:00pm</td>
									<td class="after">After School Program<br>
										3:00 - 6:00pm</td>
								<tr>
								<tr>
									<td class="children">
										Children&apos;s lessons<br>
										5:30 - 6:30pm
									</td>
									<td class="pee-wee">Pee Wee Lesson<br>
										5:00 - 6:15pm
									</td>
									<td class="children">
										Children&apos;s lessons<br>
										5:30 - 6:30pm
									</td>
									<td class="pee-wee">Pee Wee Lesson<br>
										5:00 - 6:15pm
									</td>
									<td class="children">
										Children&apos;s lessons<br>
										5:30 - 6:30pm
									</td>
								<tr>
								<tr>
									<td class="adult">
										Adult Lessons<br>
										7:00 - 8:00pm
									</td>
									<td class="adult">
										Adult Lessons<br>
										7:00 - 8:00pm
									</td>
									<td class="adult">
										Adult Lessons<br>
										7:00 - 8:00pm
									</td>
									<td class="adult">
										Adult Lessons<br>
										7:00 - 8:00pm
									</td>
									<td class="adult">
										Adult Lessons<br>
										7:00 - 8:00pm
									</td>
								<tr>
							</tbody>
						</table>
					</div>
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
