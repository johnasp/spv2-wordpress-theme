<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">

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
         <div class="post-meta" aria-hidden="true" >By 
             <a href="http://seasiderspodcast.co.uk/about" rel="nofollow author">John Aspinall</a>
             on <?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span>
         </div>
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


          </header>

          <?php the_content(); ?>  

         <!-- <nav class="prev-next group">
            <div class="prev">
              <?php //previous_post_link( '%link', '%title' ); ?>
            </div>

            <div class="next">
              <?php //next_post_link( '%link', '%title' ); ?>
            </div>
          </nav>-->

          <section id="related-posts">

              <h3>Related pods & postsZ<span data-icon="@"></span></h3>
              <?php
              //for use in the loop, list 6 post titles related to first tag on current post
              $tags = wp_get_post_tags($post->ID);
              if ($tags) {
                $first_tag = $tags[0]->term_id;
                $args=array(
                'tag__in' => array($first_tag),
                'post__not_in' => array($post->ID),
                'posts_per_page'=>6,
                'caller_get_posts'=>1
              );
              $my_query = new WP_Query($args);
              if( $my_query->have_posts() ) {
              while ($my_query->have_posts()) : $my_query->the_post(); ?>


              <figure>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                <figcaption><span aria-hidden="true" data-icon="8"></span><?php the_title(); ?></figcaption>
              </a>
              </figure>

              <?php
              endwhile;
              }
              wp_reset_query();
              }
              ?>

          </section>

          <?php 
           if  ($newPod == "true") { 
              include(TEMPLATEPATH."/inc/podcast-only.php");
           }
          ?>
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