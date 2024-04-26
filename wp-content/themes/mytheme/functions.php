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

// Comment template
function custom_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    $ava = get_avatar($comment, '48');
    $author_link = get_comment_author_link();
    // $author = get_comment_author();
    // echo $author;
    echo '
<li class="comment-list">
    <div class="avatar">
    ' . $ava . '
    </div>
    <div class="comment_content">
     <div class="comment_author">
       ' . $author_link . '
    </div>

    <span  class="comment_time">
    ' . get_comment_time('d-m-y H:i:s') . '
    </span>

    ';
    ?>
<div class="edit-line">
<?php
// 显示评论的编辑链接
    edit_comment_link('Edit', '<p class="edit-link">', '</p>');
    ?>
<div class="reply">
<?php
// 显示评论的回复链接
    comment_reply_link(array_merge($args, array(
        'reply_text' => 'Reply',
        'after' => '<span>&darr;</span>',
        'depth' => $depth,
        'max depth' => $args['max_depth'])));
    ?>
</div>
</div>
 <?php comment_text()?>
    </div>
</li>
<?php
}

// Get read times
function get_read_times($post_id)
{
    $count = get_post_meta($post_id, 'read_times', true);
    if (!$count) {return 0;} else {return $count;}
};
// Set read times
function set_read_times($post_id)
{
    // get previous count
    $count = get_read_times($post_id);
    // if ($count===0){

    // }
    update_post_meta($post_id, 'read_times', $count + 1);
    return $count;
}
