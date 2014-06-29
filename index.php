<?php $data = json_decode(file_get_contents(dirname(__FILE__) . '/data/data.json'));?>
<!doctype html>
<html class="no-js" itemscope lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hovélo - Hove-based cycling club</title>
		<meta name="description" content="Hovélo is an informal Hove-based road cycling club with weekly Sunday ride-outs starting and finishing outside Hove Park Cafe">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hovélo - Hove-based cycling club">
		<meta itemprop="description" content="Hovélo is an informal Hove-based road cycling club with weekly Sunday ride-outs starting and finishing outside Hove Park Cafe">
		<meta itemprop="image" content="http://www.example.com/image.jpg">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@_hovelo">
		<!-- Open Graph data -->
		<meta property="og:title" content="Hovélo - Hove-based cycling club" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.hovelo.com/" />
		<meta property="og:image" content=" http://example.com/image.jpg" />
		<meta property="og:description" content="Hovélo is an informal Hove-based road cycling club with weekly Sunday ride-outs starting and finishing outside Hove Park Cafe" />
		<meta property="og:site_name" content="Hovélo" />

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
		<article class="wrap hero">
	  		<img src="/assets/images/logo.png" class="logo">
	  		<p>Hovélo is an informal Hove-based cycling club.</p>
	  		<p>We meet every <b>Sunday</b> at <b>8am</b> outside the Hove Park Cafe</p>
		</article>
		<article class="wrap">
			<h2>What is Hovélo?</h2>
			<p>Hovélo is a casual cycling group open to cyclists who have confidence on the road and are comfortable with a ride average of 14 - 16mph.</p>
			<p>We meet every Sunday at 8am to head out for a ride. The ride lengths vary, from 30 miles up to 50 miles - we tend to alternate the distance weekly, so be sure to check our <a href="http://www.twitter.com/_hovelo" rel="nofollow">Twitter</a> for updates on what rides are coming up.</p>
		</article>
		<article class="wrap">
			<h2>Join Hovélo</h2>
			<p>To join in with the Hovélo club rides, all you need to do is <b>turn up!</b></p>
			<p><b>What you'll need:</b> A road (or hybrid) bike, a helmet, spare inner tube with pump and tyre levers, water or sports drink, food such as energy bars.</p>
			<p><b>Why you should join:</b> It's social, you get to ride with others, you can geek out about bikes (or not - if you don't want to), you get to practice riding in a group and you get a discount at <a href="http://www.brightonbikemonkey.co.uk/" rel="nofollow">Brighton Bike Monkey</a>! (plus there is the usual health benefits and getting out to see the countryside malarkey)</p>
			<p>Updates about the rides are often tweeted and emailed to the mailing list - so make sure you keep in touch.</p>
			<p class="social-wrap">
				<a href="http://www.twitter.com/_hovelo" rel="nofollow"  class="social twitter">@_hovelo</a>
				<a href="http://www.strava.com/clubs/hovelo" rel="nofollow" class="social strava">Hovélo on Strava</a>
			</p>
		</article>
		<article class="wrap featured">
			<form action="http://mikestreety.us8.list-manage.com/subscribe/post?u=a8d3cba48e59d2be210a5d689&amp;id=74cc8e85b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
				<label for="mce-EMAIL">To sign up to the mailing list - please enter your email address:</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</form>
		</article>
		<article class="wrap">
			<h2 class="subtle">Previous Editions</h2>
			<ul class="list">
<?php foreach($data->mailchimp->campaigns as $c) : ?>
				<li>
					<a href="<?=$c->archive_url?>"><h3><?=$c->subject?> <time><?=$c->date_sent?></time></h3></a>
				</li>
<?php endforeach; ?>
			</ul>
		</article>
	</body>
</html>
