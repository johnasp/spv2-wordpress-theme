<!-- Inspiration taken from http://cferdinandi.github.io/social-sharing/ -->

<?php
// Build the URI 
$HTTP = "http://";
$URL = $_SERVER['SERVER_NAME'];
$Path = $_SERVER['REQUEST_URI'];
$URI = $HTTP.$URL.$Path;
$PostTitle = $_SERVER['REQUEST_URI'];
$PostTitle = str_replace ("-", " ", $PostTitle ); 
$PostTitle = str_replace ("/", " ", $PostTitle );
$PostTitle = ucwords($PostTitle);
$PostTitle = "Listen to @SeasidersPod".$PostTitle;

// Get the Wordpress excerpt into a variable out of the loop
global $post;
   if (is_single()) {
      $Excerpt = get_the_excerpt($post->ID);
   }
?> 

<div class="social-share">
<a class="btn btn-tweet" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo "$PostTitle" ; ?>&url=<?php echo "$URI"; ?>">Tweet</a>
<a class="btn btn-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo "$URI"; ?>">Share</a>
<a class="btn btn-google" target="_blank" href="https://plus.google.com/share?url=<?php echo "$URI"; ?>">Google+</a>
</div>

