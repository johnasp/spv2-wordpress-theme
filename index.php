<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">

<?php 
  $cat = get_the_category(); 
  $cat = $cat[0]; 
  $myCat = $cat->cat_name; 
?>  

<!-- Start Wordpress Loop -->
<?php if (have_posts()) : ?>
<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>
<?php if ($count == 1) : ?>   

<article class="module <?php the_category_unlinked(''); ?>">
   <div class="post-meta" aria-hidden="true"><?php the_date(); ?>
      <span data-icon="
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
      <?php the_category(', '); ?> 
      </span>
   </div>
    <header> 
      <a class="latest" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
  
      <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         the_post_thumbnail('full');
       }
      ?>

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

<?php elseif ($count == 2) : ?>      
  
  <?php include(TEMPLATEPATH."/inc/loop-advert.php");?> 
  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?>
          
<?php elseif ($count == 3) : ?> 

  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?>    

<?php elseif ($count == 4) : ?>  

  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?>  

<?php elseif ($count == 5) : ?>  

  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?>  

<?php elseif ($count == 6) : ?>  

  <?php include(TEMPLATEPATH."/inc/loop-advert.php");?> 
  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?>  

<?php elseif ($count == 7) : ?>  

  <?php include(TEMPLATEPATH."/inc/article-code-block.php");?> 

<?php else : ?>
   
<?php include(TEMPLATEPATH."/inc/article-code-block.php");?>  

  <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php include(TEMPLATEPATH."/inc/pagination.php");?> 

</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 



<?php get_footer(); ?> 