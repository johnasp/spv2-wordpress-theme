<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">

<!-- http://perishablepress.com/how-to-generate-perfect-wordpress-title-tags-without-a-plugin/  -->

<title>
  <?php 
    if (function_exists('is_tag') && is_tag()) { 
      echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
    } 
    elseif (is_archive()) { 
      wp_title(''); echo ' Archive - '; 
    } 
    elseif (is_search()) { 
      echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
    } 
    elseif (!(is_404()) && (is_single()) || (is_page())) { 
      wp_title(''); echo ' - '; 
    } 
    elseif (is_404()) { 
      echo 'Not Found - '; 
    } 
    if (is_home()) { 
     echo 'Blackpool FC fans podcast - The Seasiders Podcast';
    } 
    else { 
      bloginfo('name'); 
    } 
  ?>
</title>
<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
<meta name="description" content="<?php echo get_the_excerpt();?>">
<?php endwhile; endif; elseif (is_home() ): ?>
<meta name="description" content="The Seasiders Podcast is an independent Blackpool FC fans podcast, audio and video resource.">
<?php endif; ?>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700|Roboto+Condensed:700|Fjalla+One' rel='stylesheet' type='text/css'>

<!-- Apple touch icons -->
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/touch-icon-ipad-retina.png" />

<!-- Google verification -->
<meta name="google-site-verification" content="2SG67uWMctkcL0QxFQ1dHbLKzKMG6jiNKHpoARJpkhE" />
<link rel="author" href="https://plus.google.com/u/0/+JohnAspinall73/posts" />

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

if ( in_category( 'podcasts' ) &&  !is_home() )   {
	echo " podcasts";
}
?>
">

<header class="top-banner">   
<div>
	<p>Seasiders P<span class="screen-reader-text">o</span><span class="tower-logo" data-icon="<"></span>dcast <span class="strapline">An independent Blackpool FC fans podcast</span></p>
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
  <a href="<?php echo site_url(); ?>/shop" class="donate"><span aria-hidden="true" data-icon="I"></span>Shop </a>
  <a href="<?php echo site_url(); ?>/about" class="about"><span aria-hidden="true" data-icon="="></span>About </a>
</nav> 

