<?php

// Add Theme Support
add_theme_support("menus");
add_theme_support("post-thumbnails");

// Remove Filters such as Auto <p>
remove_filter("the_excerpt", "wpautop");
remove_filter("the_content", "wpautop");

function ralph_excerpt_length($length) {
    return 80;
}
add_filter("excerpt_length", "ralph_excerpt_length", 999);

function ralph_excerpt_more( $more ) {
    return "...";
}
add_filter("excerpt_more", "ralph_excerpt_more");

// Add Menus for Navigation
function register_theme_menus() {
    register_nav_menus(
        array(
            "primary-menu" => __("Primary Menu")
        )
    );
}
add_action("init", "register_theme_menus");



// Add Widgets
function ralph_create_widget( $name, $id, $description ) {

    register_sidebar(array(
        "name" => __( $name ),
        "id" => $id,
        "description" => __( $description ),
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>"
    ));

}

ralph_create_widget("Learn Sidebar", "learn", "Displays on the side of the learn section width a sidebar");


// Stylesheet Linking
function ralph_theme_styles() {
    wp_enqueue_style("google-font", "http://fonts.googleapis.com/css?family=Lato:100,300,400,700");
    wp_enqueue_style("font-awesome", "http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
    wp_enqueue_style("main", get_template_directory_uri() . "/style.css" );
}
add_action("wp_enqueue_scripts", "ralph_theme_styles");


// JavaScript Linking
function ralph_theme_js() {
    // Head
    wp_enqueue_script("respond", get_template_directory_uri() . "/js/respond.min.js", "", "", false);

    // Footer
    wp_enqueue_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", "", "", true);
    wp_enqueue_script("scripts", get_template_directory_uri() . "/js/scripts.js", "array('jQuery')", "", true);
}
add_action("wp_enqueue_scripts", "ralph_theme_js");