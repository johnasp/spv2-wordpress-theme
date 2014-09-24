<?php 
/*
YARPP Template: Bollocks
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
	
<?php if (have_posts()):?>
<h3>May I interest you in...</h3>

<?php while (have_posts()) : the_post(); ?>
<figure>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('thumbnail'); ?>
		<figcaption><span aria-hidden="true" data-icon="8"></span><?php the_title(); ?></figcaption>
	</a>
</figure>
<?php endwhile; ?>

<?php endif; ?>
