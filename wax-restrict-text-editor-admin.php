<?php
/*
  Plugin Name: WAX Restrict Text Editor Admin
  Plugin URI: https://www.webaxones.com
  Description: Restrict text editor to administrators
  Author: Webaxones
  Author URI: https://www.webaxones.com
  Version: 1.0
 */

// don't load directly
if ( !defined( 'ABSPATH' ) )
	die('-1');


/**
 *  Restrict text editor to administrators
 *  
 *  @param   array  $settings  The array of Quicktags added by WordPress to the Text editor
 *  @return  array  $settings  The modified array to deactivate Text editor
 */

 
add_filter('wp_editor_settings', 'wax_restrict_text_editor_admin');
function wax_restrict_text_editor_admin($settings) {
    if( !(current_user_can( 'manage_options' )) ){
        $settings['quicktags'] = false;
        return $settings;
    }
}
