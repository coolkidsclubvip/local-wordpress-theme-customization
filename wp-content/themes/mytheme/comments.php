
 <!-- comments number -->
<h4> <?php echo get_comments_number(); ?> comments    </h4>

<!-- comments content -->
<?php wp_list_comments(); ?>

<!-- pagination -->
<?php the_comments_pagination(); ?>

<!--comment input  -->
<?php comment_form(); ?>