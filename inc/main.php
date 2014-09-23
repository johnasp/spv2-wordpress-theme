<section class="main">
  <h1><?php the_title(); ?></h1> 
  <?php 
  the_post_thumbnail('full');
  the_powerpress_content(); 

  $value = get_field('ep_description');
  if (empty($value)) {
  		the_content();
  }
  else {
  		echo '<p>'. $value .'</p>';
  		include(TEMPLATEPATH."/inc/adsense-body.php");
  }
  ?>
</section>