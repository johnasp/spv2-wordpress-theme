<?php
/*
Template Name: Quote
*/

<?php get_header(); ?> 
 
<div class="grid group"> 

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<section id="home" class="grid-1-2" role="main">

<!-- Only visibile on mobile screens --> 
<?php include(TEMPLATEPATH."/inc/mobile-only-subscribe.php");?>

<!-- Start Wordpress Loop -->

<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); ?>
      <article id="single" class="module blog">  
         <div class="post-meta" aria-hidden="true" ><?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
          <header>
              <h1><?php the_title(); ?></h1> 
              <?php the_post_thumbnail('medium'); ?>
              <?php include(TEMPLATEPATH."/inc/social-share.php");?> 
          </header>

             <blockquote>
                  <span class="arrow"></span><span aria-hidden="true" data-icon="B"></span>

                   <?php $quote = get_post_meta($post->ID, 'Blockquote', true);
                    if ($quote) {
                       echo $quote; 
                    }
                    else { ?>
                       <p>No quote - booo!</p>
                    <?php } ?>
              </blockquote>

          <?php the_content(); ?>  

  
          <?php include(TEMPLATEPATH."/inc/post-bottom.php");?>

</article>

<section id="related-posts" class="module archives">

  <h2>Related Posts</h2>
  <?php include(TEMPLATEPATH."/inc/related-posts.php");?>

</section>

    <?php
    } // end while
  } // end if
?>

</section>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 