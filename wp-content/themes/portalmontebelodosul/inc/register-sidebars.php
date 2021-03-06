<?php
/**
 * Register sidebars for Carpress
 *
 * @package Carpress
 */

function add_my_sidebars() {
	// blog sidebar
	if ( function_exists( 'ot_get_option' ) )
		$blog = ot_get_option( 'blog_layout', 'no' );
	if ( "no" != $blog ) {
		register_sidebar(
			array(
				'name'          => _x( 'Blog Sidebar' , 'backend', 'carpress_wp'),
				'id'            => 'blog-sidebar',
				'description'   => _x( 'Sidebar in the blog layout' , 'backend', 'carpress_wp'),
				'class'         => 'blog sidebar',
				'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="lined">',
				'after_title'   => '<span class="bolded-line"></span></div>'
			)
		);
	}

	// services sidebar
	if ( function_exists( 'ot_get_option' ) )
		$services = ot_get_option( 'services_layout', 'no' );
	if ( "no" != $services ) {
		register_sidebar(
			array(
				'name'          => _x( 'Services Sidebar' , 'backend', 'carpress_wp'),
				'id'            => 'services-sidebar',
				'description'   => _x( 'Sidebar in the services layout' , 'backend', 'carpress_wp'),
				'class'         => 'services sidebar',
				'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="lined">',
				'after_title'   => '<span class="bolded-line"></span></div>'
			)
		);
	}

	// gallery sidebar
	if ( function_exists( 'ot_get_option' ) )
		$services = ot_get_option( 'gallery_layout', 'no' );
	if ( "no" != $services ) {
		register_sidebar(
			array(
				'name'          => _x( 'Gallery Sidebar' , 'backend', 'carpress_wp'),
				'id'            => 'gallery-sidebar',
				'description'   => _x( 'Sidebar in the gallery layout' , 'backend', 'carpress_wp'),
				'class'         => 'gallery sidebar',
				'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="lined">',
				'after_title'   => '<span class="bolded-line"></span></div>'
			)
		);
	}

	// woocommerce shop sidebar
	if ( is_woocommerce_active() ) {
		register_sidebar(
			array(
				'name'          => _x( 'Shop Sidebar' , 'backend', 'carpress_wp'),
				'id'            => 'shop-sidebar',
				'description'   => _x( 'Sidebar for the shop page' , 'backend', 'carpress_wp'),
				'class'         => 'left sidebar',
				'before_widget' => '<div class="sidebar-item %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="lined">',
				'after_title'   => '<span class="bolded-line"></span></div>'
			)
		);
	}


	// contact page
	register_sidebar(
		array(
			'name'          => _x( 'Contact Page Sidebar' , 'backend', 'carpress_wp'),
			'id'            => 'contact-sidebar',
			'description'   => _x( 'Sidebar on the contact us and make an appointment page' , 'backend', 'carpress_wp'),
			'class'         => 'contact-us sidebar',
			'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="lined">',
			'after_title'   => '<span class="bolded-line"></span></div>'
		)
	);


	// regular page
	register_sidebar(
		array(
			'name'          => _x( 'Regular Page Sidebar' , 'backend', 'carpress_wp'),
			'id'            => 'regular-page-sidebar',
			'description'   => _x( 'Sidebar on the regular page' , 'backend', 'carpress_wp'),
			'class'         => 'regular-page sidebar',
			'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="lined">',
			'after_title'   => '<span class="bolded-line"></span></div>'
		)
	);


	// opening time above the slider
	register_sidebar(
		array(
			'name'          => _x( 'Opening Time in Jumbotron' , 'backend', 'carpress_wp'),
			'id'            => 'above-slider',
			'description'   => _x( 'Widget area in the jumbotron on the homepage for opening times' , 'backend', 'carpress_wp'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		)
	);

	// widgets at the bottom of the jumbotron
	register_sidebar(
		array(
			'name'          => _x( 'Jumbotron Widgets' , 'backend', 'carpress_wp'),
			'id'            => 'jumbotron-bottom',
			'description'   => _x( 'Widget area for three widgets in the jumbotron on the homepage' , 'backend', 'carpress_wp'),
			'before_widget' => '<div id="%1$s" class="%2$s  widget  clearfix">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		)
	);

	// home page - above maps
	register_sidebar(
		array(
			'name'          => _x( 'Home Page - above Google maps' , 'backend', 'carpress_wp'),
			'id'            => 'home-above-map',
			'description'   => _x( 'Sidebar above the Google maps on the homepage' , 'backend', 'carpress_wp'),
			'before_widget' => '<div class="span3"><div class="%2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="lined">',
			'after_title'   => '<span class="bolded-line"></span></div>'
		)
	);

	// home page - under Google maps
	register_sidebar(
		array(
			'name'          => _x( 'Home Page - under Google maps' , 'backend', 'carpress_wp'),
			'id'            => 'home-under-map',
			'description'   => _x( 'Sidebar under the Google maps on the homepage' , 'backend', 'carpress_wp'),
			'before_widget' => '<div class="span3"><div class="%2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="lined">',
			'after_title'   => '<span class="bolded-line"></span></div>'
		)
	);

	// footer
	register_sidebar(
		array(
			'name'          => _x( 'Footer' , 'backend', 'carpress_wp'),
			'id'            => 'footer-sidebar-area',
			'description'   => _x( 'Sidebar in the dark area at the bottom of the website' , 'backend', 'carpress_wp'),
			'before_widget' => '<div class="span3"><div class="%2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="lined">',
			'after_title'   => '<span class="bolded-line"></span></div>'
		)
	);
}
add_action( "widgets_init", "add_my_sidebars" );
