<?php 

/*
* Agrega los Post Types de aprende cocina
*/
require_once dirname(__FILE__) . '/inc/posttypes.php';


function re_setup() {

    // Menu de navegación
    register_nav_menus( array(
         'menu_primary' => esc_html__('Menu Principal')
    ) );
}

add_action('after_setup_theme', 're_setup');

/* 
* Agrega la clase nav-link de bootstrap al menu principal y secundario
*/
function re_enlace_class($atts, $item, $args){
    if($args->theme_location == 'menu_primary') {
         $atts['class'] = 'nav-link';
    } 

    return $atts;

}
add_filter('nav_menu_link_attributes', 're_enlace_class', 10, 3 );

/* 
* Agrega la imagen destacada
*/

add_theme_support('post-thumbnails');

add_theme_support('title-tag');


/*
* Registrar un widget para prueba
*/

add_action( 'widgets_init', 're_register_sidebars' );
function re_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar Recipes' ),
            'description'   => __( 'Sidebar para post recetas de cocina.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */

        /* Register the 'secundary' sidebar. */
        register_sidebar(
            array(
                'id'            => 'secundary',
                'name'          => __( 'Secundary Sidebar Learning' ),
                'description'   => __( 'Sidebar para post aprende de cocina.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        /* Repeat register_sidebar() code for additional sidebars. */


}


/**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function rc_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'rc_excerpt_length');





/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function re_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="Busca tu receta favorita..." value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" class="d-none" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 're_my_search_form' );

// Add class al <li>

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



/*
*  Carga los Scripts y CSS del theme
*/
function re_scripts() {

    
    /** Styles  get_theme_file_uri('/css/all.min.css') actualizacion*/
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' , false, '4.1.3');

    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css') );

    wp_enqueue_style('others-animate', get_template_directory_uri() . '/assets/css/others/animate.css' , false);
    wp_enqueue_style('others-font', get_template_directory_uri() . '/assets/css/others/font-awesome.min.css' , false);
    wp_enqueue_style('others-magnific', get_template_directory_uri() . '/assets/css/others/magnific-popup.css' , false);
    wp_enqueue_style('others-peicon', get_template_directory_uri() . '/assets/css/others/pe-icon-7-stroke.css' , false);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/others/owl.carousel.min.css' , false);
    wp_enqueue_style('responsive-re', get_template_directory_uri() . '/assets/css/responsive/responsive.css' , false);


    // Una nota es que debe llevar primero la version para que ejecute el true - cambiar false a 'all'
    // como infooter sino este el true hara referencia a la dependencia.

    /** Scripts */
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/assets/js/bootstrap/jquery/jquery-2.2.4.min.js','1.0', true);
    wp_enqueue_script('popper',  get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.js', array('popper'), '1.0', true );
    wp_enqueue_script('others',  get_template_directory_uri() . '/assets/js/others/plugins.js', array('bootstrap-js'),'1.0', true );
    wp_enqueue_script('active',  get_template_directory_uri() . '/assets/js/active.js', array('others'),'1.0', true );
} 


 add_action('wp_enqueue_scripts', 're_scripts' );


?>