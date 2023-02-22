<?php

require('menus/walker-navigation.php');
require('menus/walker-navigation-footer.php');
require_once('comments/CommentsWalker.php');


// Hooks / Filters
function elfee_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
    register_nav_menu('header', 'Menu principal');
    register_nav_menu('footer_main', 'Menu principal footer');
    register_nav_menu('footer_legals', 'Liens légaux');
}

function elfee_register_assets()
{
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    if(is_front_page() || is_page('massage')):
        wp_enqueue_style('frontpage_stylesheet', get_template_directory_uri() . '/assets/css/frontpage.css');
    endif;
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js');
}

function elfee_register_admin_assets()
{
    wp_enqueue_style('admin_elfee', get_template_directory_uri() . '/assets/admin/admin.css');
    wp_enqueue_script('admin_elfee', get_template_directory_uri() . '/assets/admin/admin.js', [], false, true);
}
add_action('admin_enqueue_scripts', 'elfee_register_admin_assets');

function elfee_title_separator()
{
    return '~';
}

function elfee_document_title_parts($title)
{
    $title['tagline'] = 'Thérapie holistique';
    return $title;
}

function elfee_menu_link_class($atts, $item, $args)
{
    // echo '<pre>';
    // print_r(func_get_args());
    // print_r($item);
    // echo '</pre>';
    if($args->theme_location === 'header'):
        $atts['class'] = 'a_nav_header';
        // if($item->post_title == 'Accueil'):
        if($item->url == 'http://localhost/elfee/'):
            $atts['class'] .= ' accueil';
        elseif($item->url == 'http://localhost/elfee/massage/'):
            $atts['class'] .= ' massage';
        elseif($item->url == 'http://localhost/elfee/reflexologie/'):
            $atts['class'] .= ' reflexology';
        elseif($item->url == 'http://localhost/elfee/temoignages/'):
            $atts['class'] .= ' comments';
        elseif($item->url == 'http://localhost/elfee/contact/'):
            $atts['class'] .= ' contact';
        endif;
    elseif($args->theme_location === 'footer_main'):
        $atts['class'] = 'a_nav_footer';
    endif;
    return $atts;
}

////
// Enlève le texte de la navigation dans le footer
// OU insère une balise image en fonction de l'url appelée
function elfee_menu_link_title($title, $menu_item, $args) {
    if($args->theme_location === 'footer_main'):
        if($menu_item->url == 'http://localhost/elfee/massage/'):
        // $title = $menu_item->slug;
        $title = '<img src="' . get_template_directory_uri() . '/assets/img/footer_massage.png" alt="">';
        elseif($menu_item->url == 'http://localhost/elfee/reflexologie/'):
            $title = '<img src="' . get_template_directory_uri() . '/assets/img/footer_reflexologie.png" alt="">';
        elseif($menu_item->url == 'http://localhost/elfee/temoignages/'):
            $title = '<img src="' . get_template_directory_uri() . '/assets/img/footer_temoignages.png" alt="">';
        elseif($menu_item->url == 'http://localhost/elfee/contact/'):
            $title = '<img src="' . get_template_directory_uri() . '/assets/img/footer_contact.png" alt="">';
        endif;
    endif;
    return $title;
}
add_filter('nav_menu_item_title', 'elfee_menu_link_title', 10, 3);



add_action('after_setup_theme', 'elfee_theme_supports');
add_action('wp_enqueue_scripts', 'elfee_register_assets');
add_filter('document_title_separator', 'elfee_title_separator');
add_filter('document_title_parts', 'elfee_document_title_parts');
add_filter('nav_menu_link_attributes', 'elfee_menu_link_class', 10, 3);


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


// Ajouter une icône différente à chaque lien de menu
// avec possibilité de choisir dans l'admin
function my_wp_nav_menu_objects( $items, $args ) {
    // do taht only on header menu
    if($args->theme_location === 'header'):
        // loop
        foreach( $items as &$item ) {
            // vars
            $icon = get_field('icone_menu', $item);
            // append icon
            if( $icon ) {
                // $item->title .= ' <i class="fa fa-'.$icon.'"></i>';
                $item->title .= ' <div style="width: 60px; height: 60px; display: flex; justify-content: center; margin: 0 auto;"><img src="' . $icon . '" alt="" style="display: block; object-fit: contain;"></div>';
                // margin: 10px auto 0;
            } else {
                // append logo by default
                $item->title .= ' <div style="width: 60px; height: 60px; display: flex; justify-content: center; margin: 0 auto;"><img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="" style="display: block; margin: 10px auto 0; object-fit: contain;"></div>';
            }
        }
    endif;
    // return
    return $items;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

///////
// function my_admin_only_render_field_settings( $field ) {
//     acf_render_field_setting( $field, array(
//         'label'        => __( 'Admin Only ?', 'my-textdomain' ),
//         'instructions' => '',
//         'name'         => 'admin_only',
//         'type'         => 'true_false',
//         'ui'           => 1,
//     ), true ); // If adding a setting globally, you MUST pass true as the third parameter!
// }
// add_action( 'acf/render_field_settings', 'my_admin_only_render_field_settings' );
// add_filter('acf/get_sub_field', function($sub_field, $id, $field) {
//     acf_get_sub_field('text', )
// } );
add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars ) {
    // var_dump(func_get_args());
    // die();
    // echo '<pre>';
    // print_r(func_get_args());
    // echo '</pre>';
    // die();
    array_unshift( $toolbars['Basic' ][1], 'forecolor' );
    return $toolbars;
}

///////

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
function elfee_get_title()
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


function debug($value) {
    echo '<div style="border: 5px solid grey; height: 300px; overflow-y: scroll; overflow-x: hidden; margin: 2em; padding: 1em;background-color: black; color: white;">';
    echo '<pre style="white-space: break-spaces;">';
    print_r($value);
    echo '</pre>';
    echo '</div>';
}

