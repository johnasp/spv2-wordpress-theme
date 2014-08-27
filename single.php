<?php get_header(); ?> 

<?php 
  $cat = get_the_category(); 
  $cat = $cat[0]; 
  $myCat = $cat->cat_name; 
?> 

<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">

<!-- PODCAST loop -->
<?php query_posts('showposts=1&post_type=podcast'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module <?php the_category_unlinked(''); ?>">  
          <header>
              <h1><?php the_title(); ?></h1> 
              <?php the_post_thumbnail('full'); ?>
          </header>

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

<!-- AUDIO loop -->
<?php query_posts('showposts=1&post_type=audio'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module <?php the_category_unlinked(''); ?>">  
         <div class="post-meta" aria-hidden="true" >By <a href="http://seasiderspodcast.co.uk/about" rel="nofollow author">John Aspinall</a> on <?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
          <header>
              <h1><?php the_title(); ?></h1> 
              <?php the_post_thumbnail('full'); ?>
          </header>

            <?php the_content(); ?>  

          <section id="related-posts">
            <?php include(TEMPLATEPATH."/inc/related-posts.php"); ?>
          </section>

          <?php include(TEMPLATEPATH."/inc/post-bottom.php");?>
          
      </article>

<?php endwhile; else: ?>

  <p>Sorry, there are no posts to display</p>

<?php endif; ?> 

<!-- VIDEO loop -->
<?php query_posts('showposts=1&post_type=video'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="single" class="module <?php the_category_unlinked(''); ?>">  
         <div class="post-meta" aria-hidden="true" >By <a href="http://seasiderspodcast.co.uk/about" rel="nofollow author">John Aspinall</a> on <?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
          <header>
              <h1><?php the_title(); ?></h1> 
              <?php the_post_thumbnail('full'); ?>
          </header>

            <?php the_content(); ?>  

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