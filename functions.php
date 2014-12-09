<?php


add_theme_support( 'post-thumbnails' );

// register_sidebars( 2, array( 'name' => 'Zona %d' ) ); //sidebar-1, sidebar-2

register_nav_menus( array(
	'header_menu' => 'Header Menu',
	'fixed_menu' => 'Menu Estatico',
	'footer_menu' => 'Menu Footer',
) );

register_sidebar( array(
	'name' => 'Barra lateral derecha',
	'id' => 'sidebar-curso-wp',
	'description'   => 'Barra lateral para que pongas lo que te de la gana',
  'class'         => 'clase-1',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );


/**
 * Custom functions
 */
// max excerpt
function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* No me carges los scripts de cf7, los cargare luego solo para contacto */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


// quita admin bar
add_filter('show_admin_bar', '__return_false');

// wpautop
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// CPT's
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'cpt',
		array(
			'labels' => array(
				'name' => __( 'Proyectos' ),
				'singular_name' => __( 'Proyecto' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'proyecto'),
		'taxonomies' => array('category'),
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		)
	);
}

// Quitame los metaboxes que me sobran
function quita_metaboxes_inutiles() {
	remove_meta_box('postexcerpt' , 'page' , 'normal' ); 
	remove_meta_box('authordiv', 'page', 'normal');
	remove_meta_box('commentsdiv', 'page', 'normal');
	remove_meta_box('commentstatusdiv', 'page', 'normal');
	remove_meta_box('trackbacksdiv', 'page', 'normal');
	remove_meta_box('postexcerpt', 'page', 'normal');
	remove_meta_box('revisionsdiv', 'page', 'normal');
	remove_meta_box('postcustom', 'page', 'normal');
}
add_action( 'admin_menu' , 'quita_metaboxes_inutiles' );