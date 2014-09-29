<?php get_header(); ?> 

<div class="grid group"> 
<section id="home" class="grid-1-2" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module podcast">  
      <div class="post-meta" aria-hidden="true" >
        <?php the_date(); ?><span data-icon="G">Podcast </span>
      </div>
     
      <?php      
          include(TEMPLATEPATH."/inc/main.php");
          include(TEMPLATEPATH."/inc/last-match.php");

          $tt = get_field("tangerine_topics");
          if (empty($tt)) {
         
          } 
          else {
            include(TEMPLATEPATH."/inc/tangerine-topics.php"); 
          }

          $lsb = get_field("listeners_soapbox_question");
          if (empty($lsb)) {
         
          } 
          else {
            include(TEMPLATEPATH."/inc/soapbox.php"); 
          }    

          include(TEMPLATEPATH."/inc/related-posts.php"); 

          // the_tags( 'Tagged as ', ' ',  $after );

          include(TEMPLATEPATH."/inc/post-bottom.php");
      ?>
          
      </article>

<?php endwhile; else: ?>

  <p>Sorry, there are no posts to display</p>

<?php endif; ?> 


</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 