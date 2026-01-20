<?php
  show_admin_bar(false);

  add_theme_support('post-thumbnails');

  function replace_core_jquery_version()
  {
      wp_deregister_script('jquery');
      // Change the URL if you want to load a local copy of jQuery from your own server.
      wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", array(), '3.4.1');
  }
  add_action('wp_enqueue_scripts', 'replace_core_jquery_version');



function custom_excerpt_length( $length ) {
    
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    
?>