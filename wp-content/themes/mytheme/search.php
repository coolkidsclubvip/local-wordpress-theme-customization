<?php
get_header();
?>

<div class="container">
<h2>Search result of "<?php echo get_search_query() ?>"</h2>
  <div id="lists" class="row">

   <?php

// Loop through all the posts
while (have_posts()) {
    the_post();
    get_template_part("templates/list");
}

?>





  </div><!-- #lists -->
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


<?php
get_footer();
?>
