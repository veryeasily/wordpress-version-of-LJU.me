<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/docs/assets/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'intro-js', get_template_directory_uri() . '/introjs/js/intro.js' );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'intro-js' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Header',
		'id'   => 'header',
		'description'   => 'This is the widgetized header.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

?>
