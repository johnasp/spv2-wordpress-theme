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

          <?php the_content(); ?>  

          <section class="match">
              <h3><?php echo get_post_meta($post->ID, "Match_Result", true); ?><span aria-hidden="true" data-icon="&lt;"></h3> 



              <h4>Team:</h4>
              <?php $team = get_post_meta($post->ID, 'Match_Team', true);
              if ($team) {
                 echo $team; 
              }
              else { ?>
                 <p>Empty.</p>
              <?php } ?>



              <h4>Subs:</h4>
              <?php $subs = get_post_meta($post->ID, 'Match_Team_Subs', true);
              if ($subs) {
                 echo $subs; 
              }
              else { ?>
                 <p>Empty.</p>
              <?php } ?>



              <h4>Match highlights:</h4>
              <?php $highlights = get_post_meta($post->ID, 'Match_Highlights', true);
              if ($highlights) {
                 echo $highlights; 
              }
              else { ?>
                 <p>Empty.</p>
              <?php } ?>



              <h4>Fans' match comments:</h4>
              <?php $fans = get_post_meta($post->ID, 'Match_Fans_Comments', true);
              if ($fans) {
                 echo "<ul>".$fans."</ul>"; 
              }
              else { ?>
                 <p>No comments.</p>
              <?php } ?>


              
              <h4>Manager's match comments:</h4>
              <?php $managers = get_post_meta($post->ID, 'Match_Managers_Comments', true);
              if ($managers) {
                 echo $managers; 
              }
              else { ?>
                 <p>No audio available.</p>
              <?php } ?>


          </section>

          <section class="tangerine-topics">
              <h3>Tangerine Topics<span aria-hidden="true" data-icon="5"></span></h3>
              <?php $topics = get_post_meta($post->ID, 'Tangerine_Topics', true);
              if ($topics) {
                 echo "<ul>".$topics."</ul>"; 
              }
              else { ?>
                 <p>No topics.</p>
              <?php } ?>


          </section>

          <section class="soapbox">
              <h3>Listeners Soapbox <span aria-hidden="true" data-icon="C"></span></h3>
              <blockquote>
                  <span class="arrow"></span><span aria-hidden="true" data-icon="B"></span>

                   <?php $soapbox = get_post_meta($post->ID, 'Listeners_Soapbox_Question', true);
                    if ($soapbox) {
                       echo $soapbox; 
                    }
                    else { ?>
                       <p>No soapbox - booo!</p>
                    <?php } ?>
              </blockquote>

               <?php $answers = get_post_meta($post->ID, 'Listeners_Soapbox_Answers', true);
                if ($answers) {
                   echo "<ul>".$answers."</ul>"; 
                }
                else { ?>
                   <p>No soapbox answers either, double booo!</p>
                <?php } ?>

          </section>



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