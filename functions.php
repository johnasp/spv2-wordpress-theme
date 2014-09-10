<?php  


// ADD FEATURED IMAGE SUPPORT
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 100, 50, true ); 

//ADD PAGE SLUG AS A BODY CLASS 
function the_slug() {
$post_data = get_post($post->ID, ARRAY_A);
$slug = $post_data['post_name'];
return $slug; }

//PAGINAAAAAAATION

if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

//ADSENSE

function showads() {
return '
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SP - Body Copy -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-0301430055096164"
     data-ad-slot="9710668322"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
';
}

add_shortcode('adsense', 'showads');

 
//Insert ads after second paragraph of single post content.

$HTTP = "http://";
$URL = $_SERVER['SERVER_NAME'];
$Path = $_SERVER['REQUEST_URI'];
$URI = $HTTP.$URL.$Path;
$PostTitle = $_SERVER['REQUEST_URI'];

$PostTitle = str_replace ("-", " ", $PostTitle ); 
$PostTitle = str_replace ("/", " ", $PostTitle );
$PostTitle = ucwords($PostTitle);
$PostTitle = "Have a listen to @seasiderspod ep.".$PostTitle;

add_filter( 'the_content', 'prefix_insert_post_ads' );

function prefix_insert_post_ads( $content ) {
	
	$ad_code = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SP - Body Copy -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-0301430055096164"
     data-ad-slot="9710668322"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';

	if ( is_single() && ! is_admin() ) {
		return prefix_insert_after_paragraph( $ad_code, 2, $content );
	}
	
	return $content;
}
 
// Parent Function that makes the magic happen
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {

		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}

		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	
	return implode( '', $paragraphs );
}

// CATEGORY AS SLUGS. (used to add to classes) 
function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }
    
    echo $thelist;
}

//ADDS FEATURED IMAGE TO RSS FEED

function insertThumbnailRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'alt' => get_the_title(), 'title' => get_the_title(), 'style' => 'float:right;' ) ) . '' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'insertThumbnailRSS');
add_filter('the_content_feed', 'insertThumbnailRSS');

// ADD CUSTOM POST TYPE TO THE HOMEPAGE AND FEED http://justintadlock.com/archives/2010/02/02/showing-custom-post-types-on-your-home-blog-page

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( ( is_home() && $query->is_main_query() ) || is_feed() )
		$query->set( 'post_type', array( 'blog', 'podcast', 'video', 'audio' ) );
	return $query;
}


?>