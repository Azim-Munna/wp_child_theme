<?php
	add_action('wp_enqueue_scripts','child_theme_css');
	function child_theme_css(){
	    wp_enqueue_style('ch_owl',get_stylesheet_directory_uri().'/assest/css/owl.carousel.min.css');
		wp_enqueue_style('font_awesome','https://use.fontawesome.com/releases/v5.5.0/css/all.css');
		wp_enqueue_style('imp_cust_css',get_stylesheet_directory_uri().'/custom_ch.css');
		wp_enqueue_style('imp_main_css',get_template_directory_uri().'/style.css');
		wp_enqueue_style('imp_cust_res_css',get_stylesheet_directory_uri().'/responsive_custom_ch.css');	
		wp_enqueue_script('jquery');
		wp_enqueue_script('ch_owl_js',get_stylesheet_directory_uri().'/assest/js/owl.carousel.min.js',array('jquery'),'100.2',true);
		wp_enqueue_script('custom_ch_js',get_stylesheet_directory_uri().'/custom.js',array('jquery'),'0.0.2',true);

	}
	add_action('widgets_init','child_side_bar');

	function child_side_bar(){
		register_sidebar(array(
			'name'=>'child theme sidebar',
			'id' =>'child_sidebar',
		));
	}
//for login-logout


?>