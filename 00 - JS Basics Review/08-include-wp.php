<?php

    function theme_scripts() {
      wp_enqueue_script(
    		'main-js',
    		get_template_directory_uri() . '/js/main.js',
    		array( 'jquery' ),
    		time(),
    		true );
    }
    add_action('wp_enqueue_scripts', 'theme_scripts', 999);

?>