<?php $data = json_decode(file_get_contents(dirname(__FILE__) . '/data/data.json'));?>
<!doctype html>
<html class="no-js" itemscope lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hovélo - Hove-based cycling club</title>
		<meta name="description" content="Hovélo is an informal Hove-based road cycling club with weekly weekend ride-outs starting and finishing in Hove">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hovélo - Hove-based cycling club">
		<meta itemprop="description" content="Hovélo is an informal Hove-based road cycling club with weekly weekend ride-outs starting and finishing in Hove">
		<meta itemprop="image" content="http://www.hovelo.co.uk/assets/images/logo.png">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@_hovelo">
		<!-- Open Graph data -->
		<meta property="og:title" content="Hovélo - Hove-based cycling club" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.hovelo.com/" />
		<meta property="og:image" content=" http://www.hovelo.co.uk/assets/images/logo.png" />
		<meta property="og:description" content="Hovélo is an informal Hove-based road cycling club with weekly weekend ride-outs starting and finishing in Hove" />
		<meta property="og:site_name" content="Hovélo" />

		<link rel="shortcut icon" href="/assets/images/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="/assets/images/icons/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="/assets/images/icons/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/assets/images/icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/assets/images/icons/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/assets/images/icons/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#00aba9">
		<meta name="msapplication-TileImage" content="/assets/images/icons/mstile-144x144.png">
		<meta name="msapplication-config" content="/assets/images/icons/browserconfig.xml">

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<script async="" src="//www.google-analytics.com/analytics.js"></script><script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-52085157-1', 'hovelo.co.uk');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');

		</script>
	</head>
	<body>
		<div class="wrap">
			<a class="link-top" rel="nofollow" href="http://members.hovelo.co.uk">Members Area</a>
		</div>
		<article class="wrap plain layout-two">
			<div class="column"><h1>Hovélo</h1></div>
			<div class="column">
				<p class="social-wrap">
					<a href="http://www.twitter.com/_hovelo" rel="nofollow"  class="social twitter"><span>@_hovelo</span></a>
					<a href="http://www.facebook.com/hovelo" rel="nofollow"  class="social facebook"><span>Hovélo on facebook</span></a>
					<a href="http://www.strava.com/clubs/hovelo" rel="nofollow" class="social strava"><span>Hovélo on Strava</span></a>
				</p>
			</div>
		</article>

		<article class="wrap plain hero">
			<p class="meta">We're a friendly group of riders with one dedicated goal - to have&nbsp;fun. If you'd like to ride with us, we'd love to see you at the weekend.</p>
			<p><strong>7:30am</strong> every <strong>Saturday</strong> and <strong>8:00am</strong> every <strong>Sunday</strong> outside the Goldstone Small Batch Coffee Company</p>
		</article>

		<div class="map" id="js-map"></div>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(50.833877, -0.171479),
				zoom: 14,
				scrollwheel: false,
				draggable: false
			};
			var map = new google.maps.Map(document.getElementById("js-map"), mapOptions);
			// To add the marker to the map, use the 'map' property
			var marker = new google.maps.Marker({
				position: mapOptions.center,
				map: map,
				title:"Small Batch"
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<article class="wrap">
			<h2>How do I Join?</h2>
			<p><b>You simply turn up at one of the weekend rides!</b></p>
			<p>If it's your first ride with us, make sure you <a href="http://www.twitter.com/_hovelo" rel="nofollow">tweet</a>, <a href="http://www.facebook.com/hovelo" rel="nofollow">facebook</a> or <a href="mailto:hello@hovelo.co.uk">email us</a> - that way we can make sure someone is there to welcome you and show you the ropes! You can always checkout the <a rel="nofollow" href="http://members.hovelo.co.uk">members area</a> to see what's going on</p>
			<p>Saturday morning rides start at <strong>7:30am</strong> outside the <a href="http://smallbatchcoffee.co.uk/locations/roastery-goldstone-villas-hove/" rel="nofollow">Goldstone Villas Small Batch Coffee Company</a></p>
			<p>Sunday morning rides also start at Small Batch but have a start time of <strong>8am</strong>.</p>
		</article>
		<article class="wrap">
			<h2>What is Hovélo?</h2>
			<p>Hovélo is a friendly and informal group of road cyclists. The age and ability varies massively and we're ultimately about enjoying a beautiful weekend ride.</p>
			<p>Hovélo is open to everyone but you'll need to be comfortable riding at an average speed (including climbs...and there are some) of 14 - 16mph (22 - 25 kmph). </p>
			<p>Rides aren't led like a traditional cycling club, but decided on the day by who turns up and how they're feeling.</p>
			<p>We'll be doing a couple of different paces for riders looking to get their speed and distances up and for experienced riders looking for a bigger challenge.</p>
			<p>This isn't about tearing people's legs off or suffering - you can find that elsewhere. This is about getting used to riding in a group and having fun. There'll be chatting, jokes and discussions about cycling etiquette.</p>
			<p>Shaved legs entirely optional for both sexes.</p>

			<h3>What should I bring?</h3>
			<p>Although there will be people to help, you should be prepared for any eventuality. Make sure you have a <b>pump</b> and <b>spare inner tube</b> with you to fix that puncture, and plenty of <b>water</b> and <b>food</b> (such as energy bars) to keep you going.</p> Most importantly, bring along a <b>good sense of humour</b>!
		</article>
		<article class="wrap">
			<h2>Why should I join?</h2>
			<ul>
				<li>It's social</li>
				<li>You get to ride with others and practice riding as a group</li>
				<li>You can geek out about bikes (or not - if you don't want to)</li>
				<li>You get to explore Sussex and find new routes</li>
				<li>You get to learn bike skills (including how to fix punctures quickly!)</li>
				<li>You get to meet local cyclists</li>
				<li>You get exclusive discounts at <a href="http://www.brightonbikemonkey.co.uk/" rel="nofollow">Brighton Bike Monkey</a>, <b>Small Batch Coffee Company</b>, <b>Prestige Cycles</b> and more!</li>
			</ul>
		</article>
		<article class="wrap featured">
			<form action="signup-process.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" novalidate>
				<label>To sign up to the mailing list - please enter your email address:</label>
				<input type="email" value="" name="email" class="required email" id="mce-EMAIL">
				<div class="error msg js-error"></div>
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</form>
		</article>
		<article class="wrap">
			<h2>With thanks to...</h2>
			<p class="sponsors">
				<a href="http://www.prestige-cycles.co.uk" rel="nofollow"><img src="assets/images/sponsors/prestige_logo.png" alt="Prestige Cycles"></a>
			</p>
			<!-- <p class="sponsors">
				<a href=""><img src="assets/images/sponsors/prestige_logo.png" alt="Prestige Cycles"></a>
			</p> -->
		</article>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
	</body>
</html>
