<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay"
    style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'full') ?>)">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-11 col-md-6 col-lg-4">
                <div class="hero-content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_tags('', ' | ', '') ?></p>
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

<!-- ***** Regular Page Area Start ***** -->
<section class="rc-regular-page section-padding-100">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <div class="regular-page-content">
                    <?php edit_post_link( __( ' Editar Post', 'recetasdecocina' ), '<p><i class="fa fa-pencil-square-o" aria-hidden="true"></i>', '</p>' ); ?>

                    <!-- <div class="post-title">
                        <h2><?php the_title(); ?></h2>
                        <?php the_tags('', ' | ', '') ?>
                    </div> -->

                    <div class="post-content">
                        <p><?php the_content(); ?></p>
                    </div>
                    <!-- Vaya a www.addthis.com/dashboard para personalizar sus herramientas  -->
                    <div class="addthis_inline_share_toolbox mb-3"> </div>



                    <?php 
     
     // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
     ?>


                </div>
            </div>

            <!-- ***** Regular Page Aside Start ***** -->

            <?php get_sidebar(); ?>

            <!-- ***** Regular Page Aside End ***** -->

        </div>
    </div>
</section>
<!-- ***** Regular Page Area End ***** -->