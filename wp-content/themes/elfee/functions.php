<?php

// Hooks / Filters
function elfee_theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function elfee_register_assets() {
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js');
}

function elfee_title_separator() {
    return '~';
}

function elfee_document_title_parts($title) {
    $title['tagline'] = 'Thérapie holistique';
    return $title;
}

add_action('after_setup_theme', 'elfee_theme_supports');
add_action('wp_enqueue_scripts', 'elfee_register_assets');
add_filter('document_title_separator', 'elfee_title_separator');
add_filter('document_title_parts', 'elfee_document_title_parts');


// Fonctions
// Récupère l'image correspondante à l'article sur Homepage
function get_img() {
    if(get_the_ID() == 7): ?>
        <div class="icone_homepage">
        <?php echo '<img src="' .  get_template_directory_uri() . ' /assets/img/bol.png">' ?>
        </div>
    <?php elseif(get_the_ID() == 5): ?>
        <div class="icone_homepage">
        <?php echo '<img src="' .  get_template_directory_uri() . ' /assets/img/reflexologie.png">' ?>
        </div>
    <?php endif; 
}