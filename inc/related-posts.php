<section id="related-posts">
  <h3>Related pods & posts<span data-icon="@"></span></h3>
  <?php
  //for use in the loop, list 6 post titles related to first tag on current post
  $tags = wp_get_post_tags($post->ID);
  if ($tags) {
    $first_tag = $tags[0]->term_id;
    $args=array(
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'posts_per_page'=>6,
    'caller_get_posts'=>1
  );
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>

  <figure>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
    <figcaption><span aria-hidden="true" data-icon="8"></span><?php the_title(); ?></figcaption>
  </a>
  </figure>

  <?php
  endwhile;
  }
  wp_reset_query();
  }
  ?>
</section>

