<?php get_header(); ?> 

<div class="grid group"> 
<section id="home" class="grid-1-2" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module audio">  
          <div class="post-meta" aria-hidden="true">
           <?php the_date(); ?><span>Audio </span>
          </div>
          <h1><?php the_title(); ?></h1> 
          <?php 

          the_post_thumbnail('full');

          $audio = get_field("audio_description");
          if (empty($audio)) {
            the_content();
          } 
          else {
             echo '<div class="description">';
             echo the_field('audio_description');
             echo '</div>';   
             include(TEMPLATEPATH."/inc/adsense-body.php");
             echo '<p>Listen to the thoughts of the manager using the audio player below:</p>';
             the_field('audio_embed_code');
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