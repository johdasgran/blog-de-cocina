<?php
/**
* The template for displaying search results pages
*/

get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay"
    style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/search/corner-table.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-11 col-md-6 col-lg-4">
                <div class="hero-content">
                    <?php if ( have_posts() ) : ?>
                    <h3>
                        <?php
			            /* translators: Search query. */
			            printf( __( 'Resultados de la búsqueda para: %s', 'recetasdecocina' ), '<p>' . get_search_query() . '<p>' );
                         ?>
                    </h3>
                    <?php else : ?>

                    <h2 class="page-title"><?php _e( 'No se encontró', 'recetasdecocina' ); ?></h2>
                    <p><?php _e( 'Lo siento pero no hay nada que se ajuste a tus criterios de búsqueda. Por favor, inténtalo de nuevo con palabras claves distintas.', 'recetasdecocina' ); ?>
                    </p>
                    <?php endif; ?>

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


            <?php if ( have_posts() ) :	while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile; // End of the loop.


			else :
            ?>

            <lottie-player autoplay="" loop="" mode="normal"
                src="https://assets3.lottiefiles.com/animated_stickers/lf_tgs_3UP8Iq.json">
            </lottie-player>




            <?php endif; ?>


            <?php wp_reset_postdata(); ?>


        </div>

        <!-- init pagination -->

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

    </div>
</section>







<?php get_footer();?>