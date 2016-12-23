<?php

/*
Plugin Name: Additional registration fields
Plugin URI: http://conschneider.de/additional-registration-fields-wordpress-plugin
Description: Adds additional fields shown on signup and profile page, works with Multisite. 
Author: Con Schneider
Author URI: http://conschneider.de/
Version: 1.0
Text Domain: arf-additional-registration-fields
Domain Path: /languages/
*/
/**
 * @todo: Settings for toggling notifications
 * @todo: country drop down liste
 * @todo: error handling form fields
 */


/******************************
* global variables
******************************/

/******************************
* includes
******************************/

include('includes/add-fields.php'); // adds all additional fields for registration and user profile
include('includes/data-processing.php'); // saves the data entered during registration and from the user profile
include('includes/profile-update-notifications.php'); // sends update notifications when a user profile gets updated

/******************************
* useful settings link
******************************/
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'arf_plugin_settings_link' );

function arf_plugin_settings_link( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=arf-options') ) .'">Settings</a>';
   return $links;
}