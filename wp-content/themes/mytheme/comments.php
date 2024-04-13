<div class="comments-box mt-5">
 <!-- comments number -->
<h4> <span><?php echo get_comments_number(); ?> </span>comments </h4>
<hr />
<!-- comments content -->
<?php wp_list_comments(
    array('callback' => 'custom_comment'),
);?>
<hr />
<!-- pagination -->
<?php the_comments_pagination();?>

<!--comment input  -->
<?php comment_form();?>
</div>