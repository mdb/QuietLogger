<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>
  <div id="container">
		<header id="masthead">
			<h1><a href="/"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('name'); ?></h2>
			<nav role="navigation">
		    <ul class="skip">
		      <li><a href="#nav">Skip to navigation</a></li>
		      <li><a href="#primaryContent">Skip to main content</a></li>
		      <li><a href="#secondaryContent">Skip to secondary content</a></li>
		      <li><a href="#footer">Skip to footer</a></li>
		    </ul>
			</nav>
		</header>