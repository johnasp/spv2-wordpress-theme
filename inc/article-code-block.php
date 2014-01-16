<?php 
  $cat = get_the_category(); 
  $cat = $cat[0]; 
  $myCat = $cat->cat_name; 
?>  

<article class="module <?php foreach( get_the_category() as $cat ) { echo $cat->slug . ''; } ?>">
    <div class="post-meta" aria-hidden="true"><?php the_date(); ?>
      <span data-icon="<?php if ($myCat == "Blog") { echo "$"; } else { echo "G"; } ?>"><?php the_category(', '); ?> </span>
    </div>
    <header> 
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        

        <?php the_excerpt(); ?>  

      <a class="more" href="<?php the_permalink(); ?>" data-icon="9"><?php if ($myCat == "Blog") { echo "Read"; } else { echo "Listen"; } ?></a>
    </header>   
</article>   