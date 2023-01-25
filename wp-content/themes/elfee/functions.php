<?php

// Hooks / Filters
function elfee_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
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
        <h2 class="title_homepage"><a class="a_title_homepage massage" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <?php elseif ((get_the_ID() == 5)) : ?>
        <h2 class="title_homepage"><a class="a_title_homepage reflexology" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
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

// class pour les images dumenu, à déplacer et améliorer
class Menu_With_Description extends Walker_Nav_Menu
{
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // Restores the more descriptive, specific name for use within this method.
        $menu_item = $data_object;

        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes   = empty($menu_item->classes) ? array() : (array) $menu_item->classes;
        $classes[] = 'menu-item-' . $menu_item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $menu_item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts           = array();
        $atts['title']  = !empty($menu_item->attr_title) ? $menu_item->attr_title : '';
        $atts['target'] = !empty($menu_item->target) ? $menu_item->target : '';
        if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $menu_item->xfn;
        }
        $atts['href']         = !empty($menu_item->url) ? $menu_item->url : '';
        $atts['aria-current'] = $menu_item->current ? 'page' : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $menu_item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (is_scalar($value) && '' !== $value && false !== $value) {
                $value       = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $menu_item->title, $menu_item->ID);

        $title = apply_filters('nav_menu_item_title', $title, $menu_item, $args, $depth);

        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;

        // TEST <img>
        // $item_output .= '<img src="'. get_template_directory_uri() . '/assets/img/img_test_code.jpg" alt="" style="width: 50px; margin: 0 auto;">';
        // TEST description
        // $item_output .= '<br /><span class="sub">' . $menu_item->description . '</span>';
        // TEST description avec <img>
        if (!empty($menu_item->description)) {
            $item_output .= '<div><img src="' . get_template_directory_uri() . '/assets/img/' . $menu_item->description . '" alt="" style="display: block; width: 50px; margin: 0 auto;"></div>';
        } elseif (empty($menu_item->description)) {
            $item_output .= '<div><img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="" style="display: block; width: 50px; margin: 0 auto;"></div>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args);
    }
}

// function wp_get_menu_array($current_menu)
// {

//     $array_menu = wp_get_nav_menu_items($current_menu);
//     // var_dump($array_menu);
//     // $menu = array();
//     // $menu['name'] = array();
//     foreach ($array_menu as $m) {
//         if (empty($m->menu_item_parent)) {
//             $menu[$m->ID] = array();
//             $menu[$m->ID]['ID'] = $m->ID;
//             $menu[$m->ID]['title'] = $m->title;
//             $menu[$m->ID]['url'] = $m->url;
//         }
//     }
//     return $menu;
// }

// function get_nav_icon()
// {
//     $links = wp_get_menu_array('navigation');
//     echo '<hr>';
//     echo '<hr>';
//     echo '<hr>';
//     echo '<hr>';
//     $array = [];
//         // if(array_key_exists(24, $links))
//         if($links[24]) 
//         {
//             $icon = 'icone_accueil.png';
//         }
//         // if(array_key_exists(31, $links))
//         if($links[31])
//         {
//             $icon = 'reflexology.png';
//         }
//     return $icon;
//     echo $icon;
// }
// function get_menu_item_ID()
// {
//     $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
//     // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
//     $menuID = $menuLocations['header']; // Get the *primary* menu ID
//     $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
//     foreach ($primaryNav as $navItem) {
//         // echo $navItem->ID;
//         echo $navItem->title;
//         // return $navItem->title;
//         // return $navItem->ID;

//     }
// }
// function test() {
//     $links = wp_get_menu_array('navigation');
//     var_dump($links);
//         if($links[24]['ID'] == 24) {
//             $icon = 'icone_accueil.png';
//             // return $links[24]['ID'];
//         } 
//         // else
//         if($links[22]['ID'] == 22) {
//             $icon = 'reflexology.png';
//             // return $links[22]['ID'];
//         }
//     return '<img src="'. get_template_directory_uri() . '/assets/img/'.$icon.'" alt="" style="width: 50px; margin: 0 auto;">';
// }
// $test = get_nav_icon();
// echo $test;
