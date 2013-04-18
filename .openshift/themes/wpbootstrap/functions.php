<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'intro-js', get_template_directory_uri() . '/introjs/js/intro.js' );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'intro-js' );
}
# function wpbootstrap_scripts_with_intro()
# {
#   wp_register_script( 'intro-js2', get_template_directory_uri() . '/introjs/js/intro.js' );
#   wp_enqueue_script( 'intro-js2' );
# }
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>
