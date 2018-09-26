<?php
	function js_portfolio(){
		//css
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '4.1', 'all');
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/styles/css/style.css', array(), '1.0', 'all');
		wp_enqueue_style('pagepilling', get_template_directory_uri() . '/styles/css/pagepiling.css', array(), '1.0', 'all');
		
		//js
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true);
		wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array(), '1.14', true);
		wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), '4.1', true);
		wp_enqueue_script('pagePillingJS', get_template_directory_uri() . '/js/pagepiling.min.js', array(), '1.5.5', true);
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
	}
	add_action('wp_enqueue_scripts', 'js_portfolio');


	function js_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('main', 'Main menu of page');
	}
	add_action('init', 'js_theme_setup');

	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside','image','video'));

	function jS_remove_version(){
		return '';
	}
	add_filter('the_generator', 'jS_remove_version');

	// Remove WP Version From Styles	
	add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
	// Remove WP Version From Scripts
	add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

	// Function to remove version numbers
	function sdt_remove_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	
	
	require get_template_directory() . '/bootstrap-navwalker.php';
	
