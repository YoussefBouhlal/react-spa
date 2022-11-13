<?php
/**
 * Plugin Name:       React SPA
 * Description:       Use react as a SPA in settings page
 * Requires at least: 5.9
 * Version:           1.0.0
 * Author:            Youssef Bouhlal
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       react-spa
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( "RSPA_TEXTDOMAIN", "react-spa" );
define( "RSPA_VERSION", "1.0.0" );
define( "RSPA_PLUGIN_URL", plugin_dir_url( __FILE__ ) );
define( "RSPA_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );


/**
 * Load the plugin text domain for translation.
 * 
 * @since   1.0.0
 */
add_action( "plugins_loaded", function(){

    load_plugin_textdomain( RSPA_TEXTDOMAIN, false, dirname(plugin_basename(__FILE__))."/languages" );
});

/**
 * Create settings page
 * 
 * @since   1.0.0
 */
add_action( "admin_menu", function(){

    $title   = __( "React SPA Settings", RSPA_TEXTDOMAIN );
    add_menu_page( esc_html($title), esc_html($title), "manage_options", "rspa_settings", "rspa_settings_cb", "dashicons-admin-settings", null );

});

/**
 * Enqueue styles & scripts
 * 
 * @since   1.0.0
 */
add_action( "admin_enqueue_scripts", function( $suffix){

    if ( $suffix == "toplevel_page_rspa_settings" ) {

        wp_enqueue_style( "rspa_admin_style", RSPA_PLUGIN_URL . "assets/build/admin.css", array(), RSPA_VERSION, "all" );
        wp_enqueue_script( "rspa_admin_script", RSPA_PLUGIN_URL . "assets/build/admin.js", array( "wp-element", "wp-i18n" ), RSPA_VERSION, true );

        wp_set_script_translations( "rspa_admin_script", RSPA_TEXTDOMAIN, RSPA_PLUGIN_PATH . "languages" );
    }

});

/***
 * Render settings page
 * 
 * @since   1.0.0
 */
function rspa_settings_cb() {

    ?>
        <div id="rspa_container" class="wrap"></div>
    <?php
    
}

