<?php
	$startdate = "2010-11-30";
	$enddate = "2014-10-27";
	$now = date('Y-m-d');
	$today = date('l, F jS, Y');
	// $enddate = "2012-12-10";
	
	// To format now, for example, use date('Y-m-d“);
	$diff = (strtotime( $now ) - strtotime($startdate)) / 86400;
	$diff_no_comma = round($diff);
	$diff = number_format( round($diff) );
	
	$daysleft = (strtotime( $enddate ) - strtotime($now)) / 86400;
	$daysleft = round($daysleft);
	
$message = "Today is $today, and Rob Ford has been mayor of Toronto for $diff days.";
$twmessage = "Today is $today, and @TOMayorFord has been mayor of Toronto for $diff days. #Day$diff_no_comma";

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>How Long Has Rob Ford Been Mayor?</title>
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text&subset=latin' rel='stylesheet' type='text/css'>
	<style>
		body{-webkit-font-smoothing:antialiased;background:#F2F2F2;font-family:"Crimson Text", serif;margin:0;padding:0}
		#fordcount{width:480px;margin:100px auto}
		#fordcount p{font-size:39px;text-align:center;line-height:40px;color:#444}
		#fordcount p.gone{font-size:15px}
		#twitter{height:20px;width:90px;position:absolute;top:10px;right:110px;margin:0;padding:0}
		#facebook{height:20px;width:90px;position:absolute;top:10px;right:10px;margin:0;padding:0}
		#about{position:absolute;bottom:0;right:0;font-size:26px;color:#444;margin:10px;padding:0}
		#about a{display:block;background:#777;color:#FFF;text-decoration:none;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;padding:0 12px}
		#about a:hover{background:#333;color:#FFF}
	</style>

<meta property="og:title" content="HowLongHasRobFordBeenMayor.com"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://www.cbc.ca/gfx/images/news/photos/2010/08/19/rob-ford-mugshot.jpg"/>
<meta property="og:url" content="http://howlonghasrobfordbeenmayor.com"/>
<meta property="og:site_name" content="How Long Has Rob Ford Been Mayor?"/>
<meta property="og:description" content="<?php echo $message; ?>"/>
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

	<div id="fordcount">	
		<p><?php echo $message; ?></p>
		<p>There are <?php echo($daysleft); ?> days left in his term.</p>
	</div>
	
	<div id="twitter">
		<a href="http://twitter.com/share" class="twitter-share-button" data-text="<?php echo $twmessage; ?>" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</div>
	
	<div id="facebook">
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhowlonghasrobfordbeenmayor.com&amp;layout=button_count&amp;show_faces=false&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
	</div>
	
	<div id="about">
		<a href="http://www.washingtonpost.com/wp-dyn/content/article/2009/05/14/AR2009051403597.html" target="_blank" title="What?">?</a>
	</div>

</body>
</html>