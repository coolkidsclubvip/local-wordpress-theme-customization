
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
echo '<span class="ms-3">' . get_the_date('d-m-y') . '</span> ';
// Article category
$cateArr = get_the_category(get_the_ID());
echo '<span class="px-2">' . "Category: " . '</span>';
foreach ($cateArr as $key => $value) {
    echo '<span class="px-1">' . $value->cat_name  . '</span> |';
};
// read times
echo "<span class='px-2'>" . "Read: " . set_read_times(get_the_ID()) ." times". "</span>";




// render the content
echo '<div  class="mt-5 p-0 w-75">' . get_the_content() . '</div> ';
// Inner page divider
wp_link_pages();  

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
    <div class="comments mb-5">
    <?php
echo comments_template()
?>
    </div>

<!-- /////////////////////////// -->
<?php
// 获取文章数组
$relatedPosts = get_posts(
    array(
        'numberposts' => 5,
        'category' => get_the_category(get_the_ID())[0]->cat_ID,
        'orderby' => 'date',
        'order' => 'DESC',
        'exclude' => array(get_the_ID()), // 排除当前文章
        'post_type' => 'post',
        'suppress_filters' => true,
    )
);
?>

<h2 class="mt-5">More articles from the "<?php echo $cateArr[0]->cat_name?>" category :</h2>
<!-- 循环渲染文章 -->

<div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 justify-content-start mt-3">
<?php
foreach ($relatedPosts as $post): setup_postdata($post);?>
		    <div class="card mb-3 mx-3">
		        <div class="card-body">
		            <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
		            <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
		            <a href="<?php the_permalink();?>" class="btn btn-primary">Read</a>
		        </div>
		    </div>
		<?php endforeach;
wp_reset_postdata(); // 重置文章数据
?>
</div>

<!-- ////////////////// -->

  </div>
<!-- sidebar -->
<div <?php if (is_home()) {echo 'class="sidebar"';} else {echo 'class="sidebar-2"';}?>>
    <?php get_sidebar();?>
</div>


  <!-- #lists -->

</div><!-- .container -->

<div class=" py-5 mt-5"> </div>

<?php
get_footer();
?>
