<?php comment_form(); ?>

<?php 
    $comentarios = get_comments(array(
         'post_id' => $post->ID,
         'status' => 'approve'
    ) );
    wp_list_comments(array(
         'per_page' => 10,
         'reverse_top_level' => false
    ), $comentarios);

?>