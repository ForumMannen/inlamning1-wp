<?php
/*THIS FUNCTION MAKES THE THEME TO HAVE SUPPORT FOR MENUS, THUMBNAILS, TITLE-TAGS AND WIDGETS */
function theme_support()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('widgets');
}

/*THIS IS THE HOOK WHERE THE THEME SUPPORT IS RUNNING */
add_action('after_setup_theme', 'theme_support');

/*THIS FUNCTION REGISTERS NAVIGATION MENU LOCATIONS FOR THE THEME*/
function register_menys()
{
    $menus = array(
        'huvudmeny' => 'Huvudmeny',
        'footer' => 'Footer',
        'sidebar' => 'Sidebar'
    );
    register_nav_menus($menus);
}

/*THIS FUNCTION IS ENQUEING THE STYLING-FILES */
function register_styles()
{
    wp_enqueue_style('css-style', get_template_directory_uri() . "/assets/css/style.css", array('bootstrap-style'), 'all');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), 'all');
    wp_enqueue_style('fontawesome-style', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), 'all');
}

/*THIS IS THE HOOK WHERE THE STYLES IS RUNNING */
add_action('wp_enqueue_scripts', 'register_styles');

/*THIS FUNCTION IS ENQUEING THE SCRIPT-FILES */
// function register_scripts()
// {
//     wp_register_script('script-js', get_template_directory_uri() . "/assets/js/script.js", false, true);
//     wp_enqueue_script('script-js', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), true);

//     wp_register_script('script-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), true);
//     wp_enqueue_script('script-jquery');
// }

function register_scripts()
{
    wp_enqueue_script('script-js', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
    wp_enqueue_script('script-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), true);
}
/*THIS IS THE HOOK WHERE THE SCRIPTS IS RUNNING */
add_action('wp_enqueue_scripts', 'register_scripts');

/*THIS FUNCTION IS ADDING WIDGET/SIDEBAR AREAS SO THEY'LL BE EDITABLE IN THE ADMINPANEL */
function widget_area()
{
    register_sidebar(
        array(
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Widget Area',
            'id' => 'sidebar',
            'description' => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 1',
            'id' => 'footer-1',
            'description' => 'Footer widget to the left'
        )
    );
    register_sidebar(
        array(
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 2',
            'id' => 'footer-2',
            'description' => 'Footer widget in the middle'
        )
    );
    register_sidebar(
        array(
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 3',
            'id' => 'footer-3',
            'description' => 'Footer widget to the right'
        )
    );
}

/*THIS IS THE HOOK WHERE THE WIDGETS ARE INITIALIZED */
add_action('widgets_init', 'widget_area');

/*THIS FUNCTION IS MAKING THE PAGINATION GETTING THE RIGHT ELEMENTS FOR STYLING */
function wpdocs_pagination_output($template)
{
    $template = '
    <nav class="navigation %1$s" role="navigation" aria-label="%4$s">
    <h2 class="screen-reader-text">%1$s</h2>
    %3$s
    </nav>';

    return $template;
}

/*FILTERS THE NAVIGATION MARKUP*/
add_filter('navigation_markup_template', 'wpdocs_pagination_output', 99, 2);

function changning_the_title($title, $separator)
{
    $title = str_replace($separator, '', $title);
    return $title;
}

add_filter('wp_title', 'changing_the_title', 10, 2);
