<?php $recent = new WP_Query("cat=2&showposts=500"); while($recent->have_posts()) : $recent->the_post();?>
<div>
<a href="<?php the_permalink() ?>" rel="bookmark">
<?php the_title(); ?>
</a>
</div>
<?php endwhile; ?> 