<?php 
function custom_theme_styles() {

    wp_enqueue_style('global-style', get_template_directory_uri() . '/style.css', array(),
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_style('frontpage-style', get_template_directory_uri() . '/assets/frontstyle.css', array(),
        filemtime(get_template_directory() . '/assets/frontstyle.css')
    );

    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" as="style" type="text/css" crossorigin="anonymous">';

     wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0', 'all');
    

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
    

    wp_enqueue_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', array(), '3.2.1', true);
    wp_script_add_data('animejs', 'defer', true);


    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', array('animejs'), true);
    wp_script_add_data('main-js', 'defer', true);
}

add_action('wp_enqueue_scripts', 'custom_theme_styles');


add_action('wp_head', 'custom_theme_preloads', 1);
function custom_theme_preloads() {
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" as="style" type="text/css" crossorigin="anonymous">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://cdnjs.cloudflare.com">' . "\n";
}
