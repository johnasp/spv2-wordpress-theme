<?php get_header(); ?> 

<div class="grid group"> 
<section id="home" class="grid-1-2" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module podcast">  
      <div class="post-meta" aria-hidden="true" >
        By <a href="http://seasiderspodcast.co.uk/about" rel="nofollow author">John Aspinall</a> 
        on <?php the_date(); ?><span data-icon="G">Podcast </span>
      </div>
     
      <section class="main">
          <h1><?php the_title(); ?></h1> 
          <?php the_post_thumbnail('full'); ?>
          <?php the_powerpress_content(); ?>
          <p><?php the_field('ep_description'); ?></p>
          <?php include(TEMPLATEPATH."/inc/adsense-body.php");?>
      </section>

      <?php include(TEMPLATEPATH."/inc/last-match.php");?>

      <?php
          $tt = get_field("tangerinetopics");
          if (empty($tt)) {
          } 
          else {
            include(TEMPLATEPATH."/inc/tangerine-topics.php"); 
          }
      ?>

      <?php
          $lsb = get_field("listeners_soapbox_question");
          if (empty($lsb)) {
          } 
          else {
            include(TEMPLATEPATH."/inc/soapbox.php"); 
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