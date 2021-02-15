<?php
/*
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( '', get_stylesheet_uri() ."/style/style.css" , array(), '1.0.0', 'all');
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function misrecetas_register_styles(){
    //wp_enqueue_style('Nueva_Mis_Recetas_con_GRID', get_template_directory_uri(), array(), '1.0')
    wp_enqueue_style("NuevaMisRecetasconGRID", get_template_directory_uri()."style/style.css", array(), "1.0.0", "all")
}*/

if(!function_exists('my_theme_setup')):
    function my_theme_setup(){
        add_theme_support('title-tag');

        register_nav_menus(array(
            'menu-1' => esc_html__('Primary','misrecetas')
            )
        );
    }
endif;
add_action('after_setup_theme', 'my_theme_setup');
?>