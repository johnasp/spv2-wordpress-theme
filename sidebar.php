<aside id="sidebar" class="grid-1-4 group">

<section id="catalogue" class="module archives">
  <h2>Latest Podcasts</h2>
  <ul>
      <?php
          $lastposts = get_posts('numberposts=10&orderby=date&cat=2');
          foreach($lastposts as $post) :
          setup_postdata($post); ?>

          <li<?php if ( $post->ID == $wp_query->post->ID ) { echo ' class="current"'; } else {} ?>>
              
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              
          </li>
      <?php endforeach; ?>
  </ul>
</section>

<section class="module archives">
  <h2>Tag Cloud</h2>
  <?php wp_tag_cloud(); ?>
</section>

</aside>

