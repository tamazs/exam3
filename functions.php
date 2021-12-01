<?php 

function wedding_load_scripts() {
   
    wp_enqueue_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script("j-query", "https://code.jquery.com/jquery-3.2.1.slim.min.js");
    wp_enqueue_script("bootstrap-js","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" );
    wp_enqueue_style("wedding-style",get_stylesheet_uri());
    wp_enqueue_style("strona-glowna", get_stylesheet_directory_uri() . "/style/strona-glowna.css");
    wp_enqueue_style("umow-sie", get_stylesheet_directory_uri() . "/style/umow-sie.css");
    wp_enqueue_style("suknie", get_stylesheet_directory_uri() . "/style/suknie.css");
    wp_enqueue_style("o-nas", get_stylesheet_directory_uri() . "/style/o-nas.css"); 
    wp_enqueue_style("kontakt", get_stylesheet_directory_uri() . "/style/kontakt.css"); 
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/style/footer.css"); 
    wp_enqueue_style("header", get_stylesheet_directory_uri() . "/style/header.css"); 

    
}

add_action("wp_enqueue_scripts","wedding_load_scripts");


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'bottom-menu' => 'Bottom Menu Location'
    )
)


 


?>