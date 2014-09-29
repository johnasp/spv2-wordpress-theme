<?php get_header(); ?> 

<div class="grid group"> 
<section id="home" class="grid-1-2" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module blog">  
          <div class="post-meta" aria-hidden="true"> 
            <?php the_date(); ?><span>Blog </span>
          </div>
          <h1><?php the_title(); ?></h1> 
          <?php 

          the_post_thumbnail('full');

          $theBlog = get_field("blog_content");
          if (empty($theBlog)) {
            the_content();
          } 
          else {
             echo '<div class="description">';
             echo the_field('blog_content');
             echo '</div>';   
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