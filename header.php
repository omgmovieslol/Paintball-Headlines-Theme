<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-ie6.css" />
	<![endif]-->


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = explode("?", $page);
	$page = $page[0];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<body id="<?php echo $page ?>">

	<div id="page-wrap">
			
		<div id="top-bar">

			<h1 id="logo"><a href="<?php echo get_option('home'); ?>/" style="color:#ffffff;"><?php /* bloginfo('name'); */ ?><img src="<?php bloginfo('stylesheet_directory'); ?>/pbh-logo-smaller.png" alt="Paintball Headlines" /></a></h1>
		
			<!--<p><?php bloginfo('description'); ?></p>-->
			
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		
			<div class="clear"></div>
		</div>
		
		<div id="menu-bar">
				
			<ul id="main-nav">
				<li class="home"><a href="/">Paintball</a></li>
				<!--<li class="about"><a href="/about/">About</a></li>-->
				<li class="advertise"><a href="/advertise/">Advertise</a></li>
				<li class="contact"><a href="/contact/">Contact</a></li>
			</ul>
			
			<ul id="extra-nav">
				<!--<li class="portfolio"><a href="http://pbbucket.com/">PbBucket</a></li>
				<li class="resume"><a href="http://rss.paintballheadlines.com/">Aggregator</a></li>-->
				<li class="portfolio"><a href="/feed/">RSS</a></li>
				<li class="resume"><a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=949779">Email</a></li>
			</ul>
			
			<div class="clear"></div>
		
		</div>
		<div id="top-adz">
			<script type="text/javascript"
			src="http://ads.paintballheadlines.com/scripts/ebay.js"></script>
			
		</div>
	<?php /*
		<div id="top-adz">
			<script type="text/javascript"><!--
			google_ad_client = "pub-1633320757911200";
			google_ad_slot = "0913284066";
			google_ad_width = 728;
			google_ad_height = 90;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
	*/ ?>