<?php 
// Includes
require('includes/_hooks.php');
require('includes/_setup.php');
require('includes/_head.php');
require('includes/_menu.php');
require('includes/_widgets.php');
require('includes/_shortcodes.php');
require('includes/_functions.php');
require('includes/_customisations.php');
require('includes/_instagram.php');

// register webpack compiled js and css with theme
function enqueue_webpack_scripts() {
    
    $cssFilePath = glob( get_template_directory() . '/css/build/main.min.*.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main_css', $cssFileURI );
    
    $jsFilePath = glob( get_template_directory() . '/js/build/main.min.*.js' );
    $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
     
}
add_action( 'wp_enqueue_scripts', 'enqueue_webpack_scripts' );

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function cc_mime_types($mimes) {
$mimes['json'] = 'text/plain';
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCLcDOYGHRZ4Z09tMisM0g8lSSCAywnMPc');
}

add_action('acf/init', 'my_acf_init');

/**
 * Remove Woocommerce Select2 - Woocommerce 3.2.1+
 */
function woo_dequeue_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'selectWoo');
        wp_deregister_script('selectWoo');
    } 
}
add_action( 'wp_enqueue_scripts', 'woo_dequeue_select2', 100 );

//custom function
function programmatic_login($username) {
    if (is_user_logged_in()) {
        wp_logout();
    }
    add_filter('authenticate', 'allow_programmatic_login', 10, 3);	// hook in earlier than other callbacks to short-circuit them
    $user = wp_signon(array( 'user_login' => $username ));
    remove_filter('authenticate', 'allow_programmatic_login', 10, 3);
    if (is_a($user, 'WP_User')) {
        wp_set_current_user($user->ID, $user->user_login);
        if (is_user_logged_in()) {
            return true;
        }
    }
    return false;
}

function allow_programmatic_login($user, $username, $password) {
    return get_user_by('login', $username);
}
?>