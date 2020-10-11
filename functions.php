<?php  



require_once (get_template_directory() . '/inc/navwalker.php');


function eshopper_style_nscripts(){


	wp_enqueue_style('animate-css', get_template_directory_uri() .'/css/animate.css', array(), '1.0', 'all' );
	wp_enqueue_style('site-css', get_template_directory_uri() .'/css/site.css', array(), '1.0', 'all' );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style('font-awesome-css', get_template_directory_uri() .'/css/font-awesome.min.css', array(), '1.0', 'all' );
	wp_enqueue_style('assets-bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );

	wp_enqueue_style('assets-animate-css', get_template_directory_uri() .'/assets/css/animate.css', array(), '1.0', 'all' );

	wp_enqueue_style('jquerysctipttop-css', get_template_directory_uri() .'/css/jquerysctipttop.css', array(), '1.0', 'all' );


	wp_enqueue_style('particle2-css', get_template_directory_uri() .'/css/particle2.css', array(), '1.0', 'all' );
	

	



   




	
}
add_action('wp_enqueue_scripts', 'eshopper_style_nscripts');

	function santer_scripts(){

	//wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/static/js/jquery-3.2.1.min.js', array('jquery'), '1.0', true );
	//wp_enqueue_script('popper-js', get_template_directory_uri() .'/static/js/jquery-migrate-3.0.0.min.js', array('jquery'), '1.0', true );
	//
	//wp_enqueue_script('stellar-js', get_template_directory_uri() .'/static/plugin/appear/jquery.appear.js', array('jquery'), '1.0', true );
	//wp_enqueue_script('magnific-popup-js', get_template_directory_uri() .'/static/plugin/bootstrap/js/popper.min.js', array('jquery'), '1.0', true );
	//wp_enqueue_script('nice-select-js', get_template_directory_uri() .'/static/plugin/bootstrap/js/bootstrap.js', array('jquery'), '1.0', true );
	//wp_enqueue_script('imagesloaded-js', get_template_directory_uri() .'/vstatic/js/custom.js', array('jquery'), '1.0', true );

	}

	add_action('wp_enqueue_scripts', 'santer_scripts');



register_nav_menus(array(

	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',


));

