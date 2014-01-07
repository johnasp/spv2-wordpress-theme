<article class="module blog">  
    <div class="post-meta" aria-hidden="true"><?php the_date(); ?><span data-icon="G"><?php the_category(', '); ?> </span></div>
    <header> 
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_post_thumbnail();?> 
        <?php the_excerpt(); ?>  
        
      <a class="more" href="<?php the_permalink(); ?>" data-icon="9">Listen</a>
    </header>   
</article>   