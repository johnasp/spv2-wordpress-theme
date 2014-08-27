<?php /* Template Name: Podcast new */ ?>


<?php get_header(); ?> 
 
<div class="grid group"> 

<section id="home" class="grid-1-2" role="main">
  <article class="module blog">  
    <header>
    	<h1><?php the_title(); ?></h1>
    </header>
    <p>this is the podcast listings page</p>

    <article class="module podcast">
        <div class="post-meta" aria-hidden="true">May 6, 2014      <span data-icon="G"><a href="http://seasiderspodcast.local/category/podcast/" title="View all posts in Podcast" rel="category tag">Podcast</a> </span>
        </div>
        <header> 
          <a href="http://seasiderspodcast.local/112-thank-god-its-all-over/"><h2>#112 : Thank God Its All Over</h2></a> 

            <p>In todays show we discuss Saturdays three nil defeat to Charlton, despite which, resulted in Blackpool somehow surviving for another season in the Championship, we give our thoughts on the end of season awards which were held last night and also run the rule over the impact of the news that Matt Williams has left BFC for pastures new.</p>
      
          <a class="more" href="http://seasiderspodcast.local/112-thank-god-its-all-over/" data-icon="9">Listen</a>
        </header>   
    </article>

  </article>
</section>

<?php include(TEMPLATEPATH."/inc/cta.php");?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?> 