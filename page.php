<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">

<!-- Start Wordpress Loop -->

<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); ?>
      <article class="module blog">  

          <header>
          	<h1><?php the_title(); ?></h1>
          	<?php the_post_thumbnail('large'); ?>
          </header>

          <?php the_content(); ?>  

<!-- Display list of shows only for Podcasts page -->
<section class="all-pods">
<?php
if ( is_page('60') ) { 
 include(TEMPLATEPATH."/inc/list-all-podcasts.php");
} 
?>
</section>
<?php include(TEMPLATEPATH."/inc/post-bottom.php");?>

</article>

    <?php
    } // end while
  } // end if
?>

</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 