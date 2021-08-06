<?php
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-flipbox-style', get_stylesheet_directory_uri() . '/css/flipbox.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'child-footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'child-btn-style', get_stylesheet_directory_uri() . '/css/button.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'child-about-style', get_stylesheet_directory_uri() . '/css/about.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'child-section-style', get_stylesheet_directory_uri() . '/css/section.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );


    wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );


    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script('custom',
    get_stylesheet_directory_uri() . '/main.js',array( 'jquery' ),'1.0.0',true
    );
    
    wp_enqueue_style('bootstrap',
    get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css'
);
    
    wp_enqueue_script('bootstrap',
    get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js'
    );

   }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
