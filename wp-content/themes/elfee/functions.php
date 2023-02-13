<?php

require('menus/walker-navigation.php');
require_once('comments/CommentsWalker.php');


// Hooks / Filters
function elfee_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
    register_nav_menu('header', 'Menu principal');
    register_nav_menu('footer', 'Liens légaux');
}

function elfee_register_assets()
{
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js');
}

function elfee_title_separator()
{
    return '~';
}

function elfee_document_title_parts($title)
{
    $title['tagline'] = 'Thérapie holistique';
    return $title;
}

function elfee_menu_link_class($attrs)
{
    $attrs['class'] = 'a_nav_header';
    return $attrs;
}

add_action('after_setup_theme', 'elfee_theme_supports');
add_action('wp_enqueue_scripts', 'elfee_register_assets');
add_filter('document_title_separator', 'elfee_title_separator');
add_filter('document_title_parts', 'elfee_document_title_parts');
add_filter('nav_menu_link_attributes', 'elfee_menu_link_class');


// Commentaires
// if(is_page( 'temoignages' ))
function wpdocs_comments_open( $open, $post_id ) {
	$post = get_post( $post_id );
	if ( 'page' == $post->post_type ) {
		    $open = true;
    }
	return $open;
}
add_filter( 'comments_open', 'wpdocs_comments_open', 10, 2 );
function wpdocs_set_comment_form_defaults( $defaults ) {
	//Here you are able to change the $defaults[]
    // var_dump($defaults);
    // echo '<pre>';
    // print_r($defaults);
    // echo '</pre>';
	//For example: 
	// $defaults['title_reply'] = __( 'Add a Comment' );
    $defaults['fields']['author'] =  '<input type="text" class="custom_author_field" name="author" id="author" placeholder="Votre nom" novalidate>';
	$defaults['comment_field'] = '<textarea class="custom_comment_field" id="comment" name="comment" placeholder="Votre commentaire..." required></textarea></p>';
	$defaults['label_submit'] = 'Envoyer';
	// $defaults['submit_button'] = '<span>Envoyer</span>';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'wpdocs_set_comment_form_defaults' );

function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    // $email_field = $fields['email'];
    // $url_field = $fields['url'];
    // $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    // $fields['email'] = $email_field;
    // $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    // $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );

// Fonctions
// Récupère l'image correspondante à l'article sur Homepage
function elfee_get_img()
{
    if (get_the_ID() == 7) : ?>
        <div class="icone_homepage">
            <?php echo '<img src="' .  get_template_directory_uri() . ' /assets/img/bowl.png">' ?>
        </div>
    <?php elseif (get_the_ID() == 5) : ?>
        <div class="icone_homepage">
            <?php echo '<img src="' .  get_template_directory_uri() . ' /assets/img/reflexology.png">' ?>
        </div>
    <?php endif;
}
function elfee_get_title_homepage()
{
    if (get_the_ID() == 7) : ?>
        <h2 class="title_homepage"><a class="a_title_homepage title_massage" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <?php elseif ((get_the_ID() == 5)) : ?>
        <h2 class="title_homepage"><a class="a_title_homepage title_reflexology" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <?php endif;
}
function elfee_get_button_homepage()
{
    if (get_the_ID() == 7) : ?>
        <button class="button btn-massage">En savoir plus</button>
    <?php elseif ((get_the_ID() == 5)) : ?>
        <button class="button btn-reflexology">En savoir plus</button>
<?php endif;
}




