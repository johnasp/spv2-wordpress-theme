<?php 
/*
YARPP Template: Bollocks
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?><h3>Related Posts</h3>
<?php if (have_posts()):?>
  <figure>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
    <figcaption><span aria-hidden="true" data-icon="8"></span><?php the_title(); ?></figcaption>
  </a>
  </figure>

<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
