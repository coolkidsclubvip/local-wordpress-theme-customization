<?php
// register: nav menu
register_nav_menus(array(
    'primary' => 'Navbar-header',
    'footer' => 'Navbar-Footer',
));

// adjust except length

function custom_excerpt_length($length)
{
    return 20;
};
add_filter('excerpt_length', 'custom_excerpt_length');

// change search form language from "搜索“ to "search"
function custom_search_button_text($form)
{
    $form = str_replace('value="搜索"', 'value="Search"', $form);
    return $form;
}
add_filter('get_search_form', 'custom_search_button_text');

// Activate widgets (sidebar)
add_theme_support('widgets');

/**
 * Add a sidebar.
 */
function my_custom_sidebar()
{

     register_sidebar(array(
    'name' => 'Testing sidebar0', // name of the sidebar
    'id' => 'sidebar-0',
    'description' => 'Calendar',
    'before_widget' => '<div class="widget-calendar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));

    register_sidebar(array(
        'name' => 'Testing sidebar1', // name of the sidebar
        'id' => 'sidebar-1',
        'description' => 'Blog archives',
        'before_widget' => '<div class="widget-archive">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    // can register multiple widgets
    register_sidebar(array(
        'name' => 'Testing sidebar2',
        'id' => 'sidebar-2',
        'description' => 'Quick site navigation',
        'before_widget' => '<div class="widget-navigation">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

}
add_action('widgets_init', 'my_custom_sidebar');
