<?php
	// set Toronto as the default timezone for these calculations
	date_default_timezone_set("America/Toronto");
	
	$startdate = strtotime("2010-12-01"); // day Rob Ford started his term
	$enddate = strtotime("2014-12-01"); // day Rob Ford ends his term
	$today = date('l, F jS, Y');
	$now = strtotime(date('Y-m-d')); // today
	
	$elapsed_raw = ($now - $startdate) / 86400;
	$elapsed = number_format($elapsed_raw); // subtract startdate from now, divide by seconds, format number
	$remaining = number_format(($enddate - $now) / 86400); // subtract now from enddate, divide by seconds, format number

?>
<!doctype html>
<html lang="en-CA">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>How Long Has Rob Ford Been Mayor?</title>
	<style>
		body{margin:0; padding:0; font-family: Georgia, "Times New Roman", serif; background:#F2F2F2; -webkit-font-smoothing:antialiased;}
		.container {
			margin: 15% auto 0;
			width: 90%;
			max-width: 600px;
			font-size: 2em;
			line-height: 1.2em;
			color: #444;
			text-align: center;
		}
		
		.share {
			position: absolute;
			top: 0;
			right: 1em;
		}
		
		.button {
			display: inline-block;
		}
				
		.about{position:absolute;bottom:0;right:0;font-size:26px;color:#444;margin:10px;padding:0;display:block;background:#777;color:#FFF;text-decoration:none;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;padding:0 12px}
		.about:hover{background:#333;color:#FFF}
		
		.api {
			position: absolute;
			bottom: 0;
			left: 0;
			padding: 1em;
			font-family: sans-serif;
			font-size: 0.8em;
			color: #777;
		}
		
		.api:hover {
			color: #333;
		}
		
	</style>

	<meta property="og:title" content="HowLongHasRobFordBeenMayor.com"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="http://www.cbc.ca/gfx/images/news/photos/2010/08/19/rob-ford-mugshot.jpg"/>
	<meta property="og:url" content="http://howlonghasrobfordbeenmayor.com"/>
	<meta property="og:site_name" content="How Long Has Rob Ford Been Mayor?"/>
	<meta property="og:description" content="Today is <?php echo $today; ?> and Rob Ford has been mayor of Toronto for <?php echo $elapsed; ?> days."/>
	<meta property="fb:admins" content="596370572"/>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-542016-9']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	
</head>
<body>
	<div class="container" role="main">	
		<p>Today is <?php echo $today; ?>, and Rob Ford has been mayor of Toronto for <?php echo $elapsed; ?> days.</p>
		<p>There are <?php echo $remaining ?> days left in his term.</p>
	</div>
	
	<aside class="meta" role="complementary">
		<a href="http://www.washingtonpost.com/wp-dyn/content/article/2009/05/14/AR2009051403597.html" title="What is this I don&rsquo;t even" target="_blank" class="about">?</a>
		<a href="/api/" title="API" class="api">API</a>
	</aside>
	
	<aside class="share">
		<p class="button twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://howlonghasrobfordbeenmayor.com" data-text="Rob Ford has been mayor for <?php echo $elapsed; ?> days. He has <?php echo $remaining; ?> days to go." data-dnt="true">Tweet</a></p>
		<p class="button facebook"><div class="fb-like" data-href="http://howlonghasrobfordbeenmayor.com" data-width="90" data-layout="button_count" data-show-faces="false" data-send="false"></div></p>
	</aside>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=161192250631522";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</body>
</html>