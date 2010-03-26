<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>  
	<!--[if IE<9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>
  <div id="container">
    <header id="masthead">
      <h1><a title="Home" href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
      <nav role="navigation">
        <ul class="skip">
          <li><a href="#primary-content">Skip to main content</a></li>
          <li><a href="#footer">Skip to footer</a></li>
        </ul>
      </nav>
    </header>