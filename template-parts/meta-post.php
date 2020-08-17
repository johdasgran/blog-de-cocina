<div class="meta">
    <div><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></div>
    <div><a href="<?php echo get_author_posts_url(
        get_the_author_meta('ID'),
        get_the_author_meta('user_nicename') 
    );?>"><i class="fa fa-user-o" aria-hidden="true"></i> 
        <?php the_author(); ?></a></div>
</div>

            
      