<?php 
/*
* Template Name: Template Aprende cocina
* Template Post Type: page, post
*/

get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay"
    style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'full') ?>)">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-11 col-md-6 col-lg-4">
                <div class="hero-content">
                    <h3>Aprende de cocina</h3>
                    <p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non.
                        Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>
                    <div class="welcome-social-info">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->


<!-- init loop paea blog -->


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            <?php 

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array('post_type' => 'aprende_cocina', 'paged' => $paged);
            $queryRecipe = new WP_Query($args);
                    if ( $queryRecipe->have_posts() ) :  while ( $queryRecipe->have_posts()) : $queryRecipe->the_post();  ?>


            <div class="col-md-4 ftco-animate">
                <div class="blog-entry hvr-wobble-horizontal">

                    <a href="<?php the_permalink(); ?>" class="block-20 hover01"
                        style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'large') ?>);">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        <?php get_template_part('template-parts/meta', 'post') ?>
                        <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <p class="clearfix">
                            <a href="<?php the_permalink(); ?>" class="float-left read"><i class="fa fa-rocket"
                                    aria-hidden="true"></i> Read more</a>
                            <a href="<?php the_permalink(); ?>" class="float-right meta-chat"><span
                                    class="icon-chat"></span><i class="fa fa-comments-o" aria-hidden="true"></i>
                                <?php echo get_comments_number(); ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>



            <?php wp_reset_query(); ?>

            <?php endif; ?>


        </div>
        <!-- init pagination -->

        <?php if ($queryRecipe->max_num_pages > 1) : // custom pagination  ?>
        <?php
        $orig_query = $wp_query; // fix for pagination to work
        $wp_query = $queryRecipe;
        ?>

        <?php endif; ?>

        <div class="row no-gutters my-5">
            <div class="col text-center">
                <div class="block-27">

                    <?php the_posts_pagination( array(
                    'screen_reader_text' => ' ',
                    'prev_text' => __( 'Anterior', 'recetasdecocina' ),
                    'next_text' => __( 'Siguiente', 'recetasdecocina' ),
                    ) ); ?>

                </div>
            </div>
        </div>


        <!-- End pagination -->

</section>




<?php get_footer(); ?>