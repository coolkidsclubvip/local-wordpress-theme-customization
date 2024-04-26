<?php
get_header();
?>



  <!-- Hero image -->
  <!-- only show hero when on homepage -->
  <?php if (is_home()) {?>
    <div class="hero">
      <div class="video">
        <!-- <span> Wordpress Blog with Custom Theme</span> -->
        <video class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/Nature.mp4" autoplay muted></video>
      </div>
    </div>
  <?php }?>




<div class="container">
    

  <div id="lists" class="row">

   <?php

// Loop through all the posts
while (have_posts()) {
    the_post();
    get_template_part("templates/list");
}
?>
  </div>
<!-- sidebar -->
<div <?php if (is_home()) {echo 'class="sidebar"';} else {echo 'class="sidebar-2"';}?>>
    <?php get_sidebar();?>
</div>


  <!-- #lists -->
  <!-- NEW BS Pagination -->
        <nav aria-label="page navigation" class="nav-pagination">
            <ul class="pagination justify-content-center">
                <?php
echo paginate_links(array(
    'prev_text' => '<span aria-hidden="true">Previous</span>',
    'next_text' => '<span aria-hidden="true">Next</span>',
    'class' => 'pagination',
    'mid_size' => 3,
));
?>
            </ul>
        </nav>
</div><!-- .container -->

<div class="py-5 mt-5"> </div>

<?php
get_footer();
?>

