<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay"
    style="background-image: url(<?php echo get_the_post_thumbnail_url($id, 'full') ?>)">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-11 col-md-6 col-lg-4">
                <div class="hero-content">
                    <h3><?php the_title(); ?></h3>
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

<!-- Content pages Start -->

<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<!-- Content pages End -->