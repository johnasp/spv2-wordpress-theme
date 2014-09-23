<?php 
/*
YARPP Template: Bollocks
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
	
<?php if (have_posts()):?>
<h3>Yarrp Related Posts template</h3>

<?php while (have_posts()) : the_post(); ?>
<figure>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<img src="http://seasiderspodcast.local/wp-content/uploads/2014/09/placeholder1.jpg">
		<?php //the_post_thumbnail('thumbnail'); ?>
		<figcaption><span aria-hidden="true" data-icon="8"></span><?php the_title(); ?></figcaption>
	</a>
</figure>
<?php endwhile; ?>

<?php endif; ?>
