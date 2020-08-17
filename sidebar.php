<!-- ***** Regular Page Aside Start ***** -->

<aside class="col-12 col-md-12 col-lg-4 col-xl-4">

    <!-- prueba sidebar -->

    <?php

        if( !is_active_sidebar('primary')) {
             return;
        }
        dynamic_sidebar('primary');      
                
    ?>



    <!-- ***** List cathegorys ***** -->


    <div class="row no-gutters my-5">
        <div class="col">
            <div class="block-cathegory">

                <?php wp_list_categories(array(
                 'separator' => ' ',
                 'title_li' => '<h3><i class="fa fa-star" aria-hidden="true"></i>' . __( ' Categorías:', 'recetasdecocina' ) . '</h3>',
                 'show_count' => true,
                 'number' => '40'
                )) ?>

            </div>
        </div>
    </div>

    
    <!-- ***** List tags ***** -->

    <div class="row no-gutters my-5">
        <div class="col">
            <div class="block-tags">
                    <h3><i class="fa fa-tags" aria-hidden="true"></i> Etiquetas:</h3>
                <?php wp_tag_cloud(array(
                    'number' => '40',
                    'show_count' => 1,
                    'smallest'   => 16,
                    'unit'       => 'px'
                )) ?>

            </div>
        </div>
    </div>


</aside>

<!-- ***** Regular Page Aside End ***** -->