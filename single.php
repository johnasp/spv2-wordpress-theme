<?php get_header(); ?> 
 
<div class="grid group"> 

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<section id="home" class="grid-1-2" role="main">

<!-- Only visibile on mobile screens --> 
<?php include(TEMPLATEPATH."/inc/mobile-only-subscribe.php");?>

<!-- Get new pod post into a custom field into a var --> 

<?php $newPod = get_field('new_podcast_layout'); ?>

<!-- Start Wordpress Loop -->

<?php 
  $cat = get_the_category(); 
  $cat = $cat[0]; 
  $myCat = $cat->cat_name; 
?>  

<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); ?>
      <article id="single" class="module <?php the_category_unlinked(''); ?>">  
         <div class="post-meta" aria-hidden="true" >By <a href="http://seasiderspodcast.co.uk/about">John Aspinall</a> on <?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
          <header>
              <h1><?php the_title(); ?></h1> 
              <?php 
              //  if ($myCat == "Podcast")  {
                 the_post_thumbnail('full'); 
              // }
              //  else {
              //    echo "TEST";
              //  }
                
              ?>

              <?php include(TEMPLATEPATH."/inc/social-share.php");?> 

          </header>


          <?php the_content(); ?>  

          <?php 
           if  ($newPod == "true") { 
              include(TEMPLATEPATH."/inc/podcast-only.php");
           }
          ?>

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