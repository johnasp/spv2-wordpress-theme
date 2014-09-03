  <?php
    $args = array(
      'post_type' => 'podcast',
    );
    $products = new WP_Query( $args );
    if( $products->have_posts() ) {
      while( $products->have_posts() ) {
        $products->the_post();
        ?>
         
          <article class="module podcast">
              <div class="post-meta" aria-hidden="true">
                date
                <span data-icon="G">
                  <a href="#" title="View all posts in Podcast">
                    Podcast
                  </a>
                </span>
              </div>
              <header> 
                <a href=""><h2><?php the_title(); ?></h2></a> 
                  <p><?php the_field('description'); ?></p>
                <a class="more" href="" data-icon="9">Listen to the podcast</a>
              </header>   
          </article>
        <?php
      }
    }
    else {
      echo 'No podcast post types!';
    }
  ?>
