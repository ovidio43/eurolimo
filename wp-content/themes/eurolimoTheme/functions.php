<?php
require_once(get_template_directory() . '/lib/post-type.php');
function eurolimoTheme_setup() {
	register_nav_menu( 'primary', __( 'Main Menu', 'eurolimoTheme' ) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );
}
add_action( 'after_setup_theme', 'eurolimoTheme_setup' );

function eurolimoTheme_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'eurolimoTheme' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'eurolimoTheme_wp_title', 10, 2 );


function eurolimoTheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'eurolimoTheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'eurolimoTheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'eurolimoTheme_widgets_init' );
