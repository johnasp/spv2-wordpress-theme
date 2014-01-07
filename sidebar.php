<aside id="sidebar" class="grid-1-4 group">
<div id="newsnow" class="module group partner">
  <div id="newsnowlogo" title="Click here for more Blackpool news from NewsNow" onclick="window.open('http://www.newsnow.co.uk/h/Sport/Football/Championship/Blackpool','newsnow')" ><img src="http://www.tangerinedreaming.com/wp-content/uploads/2011/06/newsnow_ab.gif" alt="As featured on NewsNow: Blackpool news"/><a id="newsnowlogo_a" href="http://www.newsnow.co.uk/h/Sport/Football/Championship/Blackpool" target="newsnow">Blackpool News 24/7</a></div>
  <script type="text/javascript">
  document.getElementById('newsnowlogo').style.cursor='pointer';
  document.getElementById('newsnowlogo_a').style.textDecoration='none';
  document.getElementById('newsnowlogo_a').style.borderBottom='0 none';
  </script>
</div>



<div id="catalogue" class="module archives">


<section>
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

<section>
<h2>Tag Cloud</h2>
<?php wp_tag_cloud(); ?>
</section>

</aside>

