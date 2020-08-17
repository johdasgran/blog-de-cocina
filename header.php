<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="rc-load"></div>
        <div class="preload-icons">
            <lottie-player autoplay="" loop="" mode="normal" 
                src="https://assets8.lottiefiles.com/packages/lf20_IYNhoR.json">
            </lottie-player>
            <!-- <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="img/core-img/preload-3.png" alt=""> -->

        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="rc-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">

                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url('/'));  ?>">
                            <lottie-player autoplay="" loop="" mode="normal"
                                src="https://assets9.lottiefiles.com/animated_stickers/lf_tgs_9D1Uee.json"
                                style="width: 50px; height: 50px;">
                            </lottie-player>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#rcNav"
                            aria-controls="rcNav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="fa fa-bars"></span> -->

                            <lottie-player autoplay="" loop="" mode="normal"
                                src="https://assets4.lottiefiles.com/datafiles/XKZfXUxDQSfhvyY/data.json"
                                style="width: 25px; height: 25px;">
                            </lottie-player>



                        </button>

                        <?php 

                        wp_nav_menu(array(

                            'theme_location' => 'menu_primary',
                            'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'rcNav',
                            'items_wrap' => '<ul class="navbar-nav ml-auto" id="rcMenu">%3$s</ul>',     
                            'add_li_class'  => 'nav-item',
                        
                        ));
                                     
                        ?>

                        <!-- Search Btn -->
                        <div class="rc-search-btn">
                            <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <!-- lottie play para animaciones -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@0.2.0/dist/lottie-player.js"></script>
    </header>
    <!-- ***** Header Area End ***** -->