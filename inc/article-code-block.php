<article class="module <?php foreach( get_the_category() as $cat ) { echo $cat->slug . ''; } ?>">
    <div class="post-meta" aria-hidden="true"><?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
    <header> 
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_post_thumbnail();?> 

<?php

    if ($category="Blog")
      {
      echo "This is a blog";
      }
    else
      {
      echo "This is a podcast";
      }
?>
        <?php the_excerpt(); ?>  
        
      <a class="more" href="<?php the_permalink(); ?>" data-icon="9">Listen</a>
    </header>   
</article>   