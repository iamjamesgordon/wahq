<?php

//Link to main style and Javascript files

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// Register Menus

function register_my_menus() {
  register_nav_menus(
    array(
		'primary-menu' => __( 'Primary Menu' ),
		'social-menu' => __( 'Social Menu' ),
		'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Enable support for post thumbnails

add_theme_support( 'post-thumbnails' ); 

// Woocommerce compatibiity

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section> <div class="inner">';
}

function my_theme_wrapper_end() {
  echo '</div></section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Woocommerce remove stylesheets

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Woocommerce add own stylesheets

function wp_enqueue_woocommerce_style(){
	wp_register_style( 'WAHQ-theme', get_template_directory_uri() . '/css/woocommerce.css' );

	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'WAHQ-theme' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

?>