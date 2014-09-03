<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">

<?php 
  $cat = get_the_category(); 
  $cat = $cat[0]; 
  $myCat = $cat->cat_name;  
?>

<!-- Display featured post -->
<?php if (have_posts()) : ?>
<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>
<?php if ($count == 1) : ?>   
<?php $cpt = get_post_type(get_the_ID()); ?>

<article class="module <?php the_category_unlinked(''); echo $cpt; ?>">
   <div class="post-meta" aria-hidden="true"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>      <span data-icon="
      <?php 
        if ($myCat == "Blog") { 
          echo "$"; 
        } 
        else if ($myCat == "Audio") { 
          echo "2"; 
        } 
        else if ($myCat == "Video") { 
          echo "%"; 
        } 
        else { 
          echo "G"; 
        } 
      ?>
      ">
      <?php the_category(', '); echo $cpt; ?> 
      </span>
   </div>
    <header> 
      <a class="latest" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
  
      <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         the_post_thumbnail('full');
       }
      ?>

      <?php echo 'YO The post type is: ' . get_post_type( get_the_ID() ); ?></p>

      <?php if ( is_home() || is_search() ) : // Only display excerpts for archives and search. ?>  
        <strong><?php the_excerpt(); ?></strong>  
      <?php else : ?>  
       <?php the_content('Read More'); ?>  
      <?php endif; ?>  
      <a class="more" href="<?php the_permalink(); ?>" data-icon="9">

      <?php 
      if ($myCat == "Blog") { 
        echo "Read"; 
      } 
      else if ($myCat =="Video") {
        echo "Watch";
      }
      else { 
        echo "Listen"; 
      } 
      ?>
      </a>
    </header>   
</article>




<?php elseif ($count > 1) : ?>      
<?php $cpt = get_post_type(get_the_ID()); ?>

<?php // include(TEMPLATEPATH."/inc/podcast-post-type.php");?>

<article class="module <?php echo $variable; foreach( get_the_category() as $cat ) { echo $cat->slug . ''; } ?> <?php echo $cpt; ?>">
    <div class="post-meta" aria-hidden="true"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
      <span data-icon="<?php if ($myCat == "Blog") { echo "$"; } else { echo "G"; } ?>"><?php the_category(', '); ?> 

<?php 
  if (get_post_type( get_the_ID() ) != "post") {
    echo $cpt;
  } 
?>

</span>
    </div>
    <header> 
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 

        <?php the_excerpt(); ?>  
         <?php echo 'YO The post type is: ' . get_post_type( get_the_ID() ); ?></p>
          <p><?php the_field('description'); ?></p><p><?php the_field('video_description'); ?></p>


      <a class="more" href="<?php the_permalink(); ?>" data-icon="9"><?php if ($myCat == "Blog") { echo "Read"; } else { echo "Listen"; } ?></a>
    </header>   
</article>   

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



<?php include(TEMPLATEPATH."/inc/pagination.php");?> 

</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 



<?php get_footer(); ?> 