
<?php
get_header();
?>

<div class="container">

  <div class="row">
      <div class="col mt-5 author">
               <?php
// to get the post
the_post();
// render the title
the_title('<h1>', '</h1>');
// render the author with URL link to the author
$author_url = get_author_posts_url(get_the_author_meta('ID'));
echo '<a href="' . $author_url . '" >' . get_the_author() . '</a>';
// render the date and time
echo get_the_date('d-m-y');
// render the content
echo '<div  class="mt-5 p-0 w-75">' . get_the_content() . '</div> ';

?>
   </div>
   <div class="navs mt-5">
     <?php
the_post_navigation(
    array(
        'prev_text' => '<span class="nav-subtitle"> Previous article: </span> <span class="nav-title">%title</span>', 'next_text' => '<span class="nav-subtitle"> Next article: </span> <span class="nav-title">%title</span>',
        'class' => 'post-navigation',
    )
);

?>
   </div>
   <!-- comments -->
    <div class="comments">
    <?php
echo comments_template()
?>
    </div>


  </div>
<!-- sidebar -->
<div <?php if (is_home()) {echo 'class="sidebar"';} else {echo 'class="sidebar-2"';}?>>
    <?php get_sidebar();?>
</div>


  <!-- #lists -->

</div><!-- .container -->



<?php
get_footer();
?>
