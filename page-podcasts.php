<?php
/*
Template Name: Podcasts
*/
?>

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

          <section class="all-pods">
            <h4>Season 2013/14 - Championship</h4>
            <?php $recent = new WP_Query("cat=296&showposts=500"); while($recent->have_posts()) : $recent->the_post();?>
            <a href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
            <?php endwhile; ?> 

            <h4>Season 2012/13 - Championship</h4>
            <?php $recent = new WP_Query("cat=297&showposts=500"); while($recent->have_posts()) : $recent->the_post();?>
            <a href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
            <?php endwhile; ?> 

            <h4>Season 2011/12 - Championship</h4>
            <?php $recent = new WP_Query("cat=298&showposts=500"); while($recent->have_posts()) : $recent->the_post();?>
            <a href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
            <?php endwhile; ?> 

            <h4>Season 2010/11 - Premier League</h4>
            <?php $recent = new WP_Query("cat=258&showposts=500"); while($recent->have_posts()) : $recent->the_post();?>
            <a href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
            <?php endwhile; ?> 






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