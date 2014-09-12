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

// CPT declerations

add_action('init', 'cptui_register_my_cpt_video');
function cptui_register_my_cpt_video() {
register_post_type('video', array(
'label' => 'Videos',
'description' => 'BFC related videos.',
'public' => true,
'yarpp_support' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'video', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Videos',
  'singular_name' => 'Video',
  'menu_name' => 'Videos',
  'add_new' => 'Add Video',
  'add_new_item' => 'Add New Video',
  'edit' => 'Edit',
  'edit_item' => 'Edit Video',
  'new_item' => 'New Video',
  'view' => 'View Video',
  'view_item' => 'View Video',
  'search_items' => 'Search Videos',
  'not_found' => 'No Videos Found',
  'not_found_in_trash' => 'No Videos Found in Trash',
  'parent' => 'Parent Video',
)
) ); }

add_action('init', 'cptui_register_my_cpt_audio');
function cptui_register_my_cpt_audio() {
register_post_type('audio', array(
'label' => 'Audio Clips',
'description' => 'Audio clips, not podcasts. ',
'public' => true,
'yarpp_support' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'audio', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Audio Clips',
  'singular_name' => 'Audio',
  'menu_name' => 'Audio',
  'add_new' => 'Add Audio',
  'add_new_item' => 'Add New Audio',
  'edit' => 'Edit',
  'edit_item' => 'Edit Audio',
  'new_item' => 'New Audio',
  'view' => 'View Audio',
  'view_item' => 'View Audio',
  'search_items' => 'Search Audio Clips',
  'not_found' => 'No Audio Clips Found',
  'not_found_in_trash' => 'No Audio Clips Found in Trash',
  'parent' => 'Parent Audio',
)
) ); }

add_action('init', 'cptui_register_my_cpt_blog');
function cptui_register_my_cpt_blog() {
register_post_type('blog', array(
'label' => 'Blog',
'description' => '',
'public' => true,
'yarpp_support' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'blog', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Blog',
  'singular_name' => 'blog',
  'menu_name' => 'Blog',
  'add_new' => 'Add blog',
  'add_new_item' => 'Add New blog',
  'edit' => 'Edit',
  'edit_item' => 'Edit blog',
  'new_item' => 'New blog',
  'view' => 'View blog',
  'view_item' => 'View blog',
  'search_items' => 'Search Blog',
  'not_found' => 'No Blog Found',
  'not_found_in_trash' => 'No Blog Found in Trash',
  'parent' => 'Parent blog',
)
) ); }

add_action('init', 'cptui_register_my_cpt_podcast');
function cptui_register_my_cpt_podcast() {
register_post_type('podcast', array(
'label' => 'Podcasts',
'description' => 'Episodes of the Seasiders Podcast',
'public' => true,
'yarpp_support' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'podcast', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'taxonomies' => array('post_tag','season'),
'labels' => array (
  'name' => 'Podcasts',
  'singular_name' => 'Podcast',
  'menu_name' => 'Podcasts',
  'add_new' => 'Add Podcast',
  'add_new_item' => 'Add New Podcast',
  'edit' => 'Edit',
  'edit_item' => 'Edit Podcast',
  'new_item' => 'New Podcast',
  'view' => 'View Podcast',
  'view_item' => 'View Podcast',
  'search_items' => 'Search Podcasts',
  'not_found' => 'No Podcasts Found',
  'not_found_in_trash' => 'No Podcasts Found in Trash',
  'parent' => 'Parent Podcast',
)
) ); }
?>