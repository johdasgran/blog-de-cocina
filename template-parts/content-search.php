<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 ftco-animate'); ?>>

    <div class="blog-entry hvr-wobble-vertical">
        <a href="<?php the_permalink(); ?>" class="block-20 hover01"
            style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'large') ?>);">
        </a>
        <div class="text px-4 pt-3 pb-4">
            <?php get_template_part('template-parts/meta', 'post') ?>

            <?php  
							if ( is_front_page() && ! is_home() ) {

							the_title( sprintf( '<h3 class="heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
							} else {
							the_title( sprintf( '<h3 class="heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
							}
						?>
            <p><?php the_excerpt(); ?></p>
            <p class="clearfix">
                <a href="<?php the_permalink(); ?>" class="float-left read"><i class="fa fa-rocket"
                        aria-hidden="true"></i> Read more</a>
                <a href="<?php the_permalink(); ?>" class="float-right meta-chat"><span class="icon-chat"></span><i
                        class="fa fa-comments-o" aria-hidden="true"></i>
                    <?php echo get_comments_number(); ?></a>
            </p>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->