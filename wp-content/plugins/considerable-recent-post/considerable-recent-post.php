<?php
/**
* Plugin Name: Considerable Recent Post
* Description: Description of the plugin.
* Version:     1.0.0
* Author:      Robin Pahlman
**/

wp_register_style ( 'style', plugins_url ( 'css/recent-post-style.css', __FILE__ ) );
wp_enqueue_style('style');

function recent_post() {
  $args = array( 'numberposts' => '1', 'category' => CAT_ID );
  $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
      $image = 'https://i.imgur.com/fniSFQ0.jpg';
      $categories = get_the_category($recent["ID"]);
      return '<div style="border: 1px solid red;"><img class="card-image" src="'. $image .'">' . '<div class="card-category"><br />' . $categories[0]->name . '</div><br />' . '<a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a>  </li> </div>';
    }
}

function after_post_content($content){
if (is_single()) {	
  $content .= recent_post();
}
	return $content;
}
add_filter( "the_content", "after_post_content" );
?>









