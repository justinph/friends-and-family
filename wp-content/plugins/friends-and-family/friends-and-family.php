<?php
/**
 * Plugin Name
 *
 * @package           FriendsAndFamily
 * @author            Justin Heideman
 * @copyright         2023 Justin Heideman
 * @license           MIT
 *
 * @wordpress-plugin
 * Plugin Name:       Friends and Family
 * Plugin URI:        https://friends-and-family.fiddlyio.com
 * Description:       Allows a site to be protected by simple questions.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Justin Heideman
 * Author URI:        https://fiddlyio.com
 * Text Domain:       friends-and-family
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Update URI:        https://fiddlyio.com/friends-and-family/
 */



function fnf_setting_callback_function($args){
	echo '<input type="text" id="fnf_setting-id" />';
}

function fnf_register_settings() {
	$args = array(
			'type' => 'string',
      'description' => 'FNF awesome test',
			'sanitize_callback' => 'sanitize_text_field',
			'default' => NULL,
			);
    register_setting( 'general', 'fnf_derp_test', $args );


  add_settings_field(
    'fnf_setting-id', // id
    'FNF Question', // title
    'fnf_setting_callback_function', // callbak
    'general', // page
    'default', // section
    array( 'label_for' => 'fnf_setting-id' )  // args
  );

}
add_action( 'admin_init', 'fnf_register_settings' );


