<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Customize the logo WP login page.
 */
function inhabitent_login_logo() {
	echo '<style>
		#login h1 a {
			background: url(' . get_template_directory_uri() . '/images/inhabitent-logo-text-dark.svg) no-repeat !important;
			background-size: 300px 53px !important; width: 300px !important; height: 53px !important;
		}
		#login .button.button-primary {
			background-color: #248A83;
		}
	</style>';
}
add_action( 'login_head', 'inhabitent_login_logo' );

/**
 * Customize the URL the logo points to WP login page.
 *
 * @param  string $url The URL the logo image link points to.
 * @return string
 */
function inhabitent_login_logo_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

/**
 * Customize the title attribute for the login logo link.
 *
 * @return string
 */
 function inhabitent_login_title(){
	 return 'Inhabitent Camping Supply Co.';
 }
 add_filter('login_headertitle', 'inhabitent_login_title');