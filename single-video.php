<?php get_header(); ?> 

<div class="grid group"> 
<section id="home" class="grid-1-2" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module video">  
          <div class="post-meta" aria-hidden="true" >
            <?php the_date(); ?><span data-icon="%">Video </span>
          </div>

          <h1><?php the_title(); ?></h1> 
          <?php 

          the_post_thumbnail('full');

          $video = get_field("video_description");
          if (empty($video)) {
            the_content();
          } 
          else {
             echo '<div class="description">';
             echo the_field('video_description');
             echo '</div>';   
             include(TEMPLATEPATH."/inc/adsense-body.php");
             the_field('video_embed_code');
          }
          
          ?>

          <?php include(TEMPLATEPATH."/inc/related-posts.php"); ?>
       
          <?php include(TEMPLATEPATH."/inc/post-bottom.php");?>
          
      </article>

<?php endwhile; else: ?>

  <p>Sorry, there are no posts to display</p>

<?php endif; ?> 


</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 