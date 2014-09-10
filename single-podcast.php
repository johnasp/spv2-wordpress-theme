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

          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- SP - Body Copy -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:468px;height:60px"
               data-ad-client="ca-pub-0301430055096164"
               data-ad-slot="9710668322"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>


      </section>

      <section class="match">
      <?php
         $rows = get_field('last_match_review');
          if($rows) {
            foreach($rows as $row)
            {
              echo '<h3>' . $row['result'] . '<span aria-hidden="true" data-icon="&lt;"></h3>';
              echo '<h4>Result:</h4>' . $row['result'];
              echo '<h4>Team:</h4>' . $row['team'];
              echo '<h4>Subs:</h4>' . $row['subs'];
              echo '<h4>Match highlights:</h4>' . $row['highlights'];
              echo '<h4>Fans comments:</h4>' . $row['fans_comments'];
              echo '<h4>Manager comments:</h4>' . $row['manager_comments'];
            }
          }  
      ?>
      </section>

          <section class="tangerine-topics">
              <h3>Tangerine Topics<span aria-hidden="true" data-icon="5"></span></h3>
              <?php the_field('tangerinetopics'); ?>
          </section>

          <section class="soapbox">
              <h3>Listeners Soapbox <span aria-hidden="true" data-icon="C"></span></h3>
              <blockquote><span class="arrow"></span><span aria-hidden="true" data-icon="B"></span>
                 <?php the_field('listeners_soapbox_question'); ?>
              </blockquote>
                 <?php the_field('listeners_soapbox_answers'); ?>
          </section>

          <section id="related-posts">
            <?php include(TEMPLATEPATH."/inc/related-posts.php"); ?>
          </section>

          <?php include(TEMPLATEPATH."/inc/post-bottom.php");?>
          
      </article>

<?php endwhile; else: ?>

  <p>Sorry, there are no posts to display</p>

<?php endif; ?> 


</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 