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
      $author = get_the_author();
      $categories = get_the_category($recent["ID"]);
      $timestamp = human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
      $author_id = the_author_link();

      // return '<div class="card-container" style="border: 1px solid red;"><img class="card-image" src="'. $image .'">' . '<div class="card-category"><br />' . $categories[0]->name . '</div><br />' . '<div class="post-title"><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a>  </div> </div>';

      // return '<a href="' . get_permalink($recent["ID"]) . '"><div class="card-container"><img class="card-image" src="'. $image .'">' . '<div class="card-text"><h4 class="card-category">' . $categories[0]->name . '</h4>' . '<h1 class="post-title">' .   ( __($recent["post_title"])). '</h1><p>By <a href="' . $author_id . '">' . $author . '</a>' . $timestamp . '</p></div></div></a>';

      return '<div class="card-container"><img class="card-image" src="'. $image .'">' . '<div class="card-text"><h4 class="card-category">' . $categories[0]->name . '</h4>' . '<h1 class="post-title"><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])) . '</a></h1><p>By ' . get_the_author_link() . ' ' . $timestamp . '</p></div></div></a>';
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









