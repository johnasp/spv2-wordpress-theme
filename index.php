<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">


<!-- Display featured post -->
<?php if (have_posts()) : ?>
<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>
<?php if ($count == 1) : ?>   

<?php  
  $cpt = get_post_type(get_the_ID()); 
?>

<!-- FEATURED POST --> 
<article class="module <?php echo $cpt; ?>">
   <div class="post-meta" aria-hidden="true"><?php the_time('F j, Y'); ?>
     <span><?php echo $cpt; ?></span>
   </div>
    <header> 
      <a class="latest" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>
      <?php if ( is_home() || is_search() ) : // Only display excerpts for archives and search. ?>  
          <strong><?php the_excerpt(); ?></strong>  
      <?php else : ?>  
          <?php the_content('Read More'); ?>  
      <?php endif; ?>  
          <a class="more" href="<?php the_permalink(); ?>" data-icon="9">More</a>
    </header> 
</article>

<!-- OTHER POSTS --> 
<?php elseif ($count > 1) : ?>      
<?php 
  $cpt = get_post_type(get_the_ID()); 
?>

<article class="module <?php echo $cpt; ?>">
    <div class="post-meta" aria-hidden="true"><?php the_time('F j, Y'); ?>
      <span><?php echo $cpt; ?> </span>
    </div>
    <header> 
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php the_excerpt(); ?>  
      <a class="more" href="<?php the_permalink(); ?>" data-icon="9">More</a>
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