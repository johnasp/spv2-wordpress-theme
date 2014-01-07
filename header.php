<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">


<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700|Roboto+Condensed:700|Fjalla+One' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >
<!-- Apple touch icons -->
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/touch-icon-ipad-retina.png" />


<!-- Jquery from CDN -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>
<body class="<?php
if ( is_home() ) {
    echo "home";
} 
else {
    echo the_slug();
}

if ( is_page() ) {
    echo " wp-page";
} 
else {
    echo " wp-post";
}

if ( in_category( 'seasiders-podcast' ) &&  !is_home() )   {
	echo " podcasts";
}


?>
">


<header class="top-banner group">   
<div id="logo" class="grid-half">
	<p>Seasiders P<span class="retro" data-icon="<"></span>dcast <span class="strapline">An independent Blackpool FC fans podcast</span></p>
</div> 

<!--<div id="box-ad">
<a href="http://www.kqzyfj.com/click-7085463-10451725" target="_top">
<img src="http://www.tqlkg.com/image-7085463-10451725" width="120" height="60" alt="Free Audiobook Downloads at Audible.co.uk " border="0"/></a>
</div>

<!--<div id="mid-ad">
<a href="http://www.anrdoezrs.net/click-7085463-10403512" target="_top">
<img src="http://www.awltovhc.com/image-7085463-10403512" width="468" height="60" alt="Download any audiobook for £3.99 at Audible.co.uk " border="0"/></a>
</div>-->

<!--<div id="banner-ad">
<a href="http://www.jdoqocy.com/click-7085463-10483798" target="_top">
<img src="http://www.lduhtrp.net/image-7085463-10483798" width="728" height="90" alt="FT Audible.co.uk" border="0"/></a>
</div>-->

</header>
<div class="page-wrap group">

<nav id="main-nav" role="navigation">
  <a href="/" class="home"><span aria-hidden="true" data-icon="!"></span>Home</a>
  <a href="<?php echo site_url(); ?>/seasiders-podcast" class="podcasts"><span aria-hidden="true" data-icon="G"></span>Podcast</a>
  <a href="<?php echo site_url(); ?>/blog" class="blogs"><span aria-hidden="true" data-icon="$"></span>Blog</a>
  <a href="<?php echo site_url(); ?>/live" class="live"><span aria-hidden="true" data-icon="Q"></span>Live </a>
  <a href="<?php echo site_url(); ?>/subscribe" class="subscribe"><span aria-hidden="true" data-icon="o"></span>Susbscribe </a>
  <a href="<?php echo site_url(); ?>/blackpool-fc" class="blackpool-fc"><span aria-hidden="true" data-icon="<"></span>Blackpool FC </a>
  <a href="<?php echo site_url(); ?>/donate" class="donate"><span aria-hidden="true" data-icon="I"></span>Donate </a>
  <a href="<?php echo site_url(); ?>/about" class="about"><span aria-hidden="true" data-icon="="></span>About </a>
</nav> 

