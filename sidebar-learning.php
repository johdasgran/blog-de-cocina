<!-- ***** Regular Page Aside Start ***** -->

<aside class="col-12 col-md-12 col-lg-4 col-xl-4">

    <!-- prueba sidebar -->

    <?php

        if( !is_active_sidebar('secundary')) {
             return;
        }
        dynamic_sidebar('secundary');      
                
    ?>

    
    <!-- ***** List tags taxonomy ***** -->

    <div class="row no-gutters my-5">
        <div class="col">
            <div class="block-tags">
                    <h3><i class="fa fa-tags" aria-hidden="true"></i> Aprendizajes:</h3>
                <?php wp_tag_cloud(array(
                    'number' => '40',
                    'show_count' => 1,
                    'smallest'   => 16,
                    'unit'       => 'px',
                    'taxonomy' => 'aprendizaje'
                )) ?>

            </div>
        </div>
    </div>

</aside>

<!-- ***** Regular Page Aside End ***** -->
