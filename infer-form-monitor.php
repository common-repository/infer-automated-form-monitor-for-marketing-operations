<?php
/*
Plugin Name: Automated Form Monitor
Plugin URI: http://dev-infer.pantheonsite.io/automated-form-monitor-wordpress-plugin-for-marketing-operations
Description: Automated form monitor plugin for marketing operations teams.
Author: Infer & Studio Hyperset
Author URI: http://dev-infer.pantheonsite.io/automated-form-monitor-wordpress-plugin-for-marketing-operations
Version: 1.0.2
*/


define(INFERFORMPATH, plugin_dir_path( __FILE__ ));
define(INFERFORMURL, plugins_url( '', __FILE__ ));
define(INFERFORMNAME, 'infer-automated-form-monitor-for-marketing-operations');


require_once( INFERFORMPATH . '/admin/menu.php');
require_once( INFERFORMPATH . '/admin/admin-functions.php');
require_once( INFERFORMPATH . '/admin/admin-ajax.php');
require_once( INFERFORMPATH . '/admin/admin-cron.php');
require_once( INFERFORMPATH . '/admin/pardot-api.php');

// Add settings link on plugin page
function plugin_settings_link($links) { 
  $settings_link = '<a href="admin.php?page=form_monitor">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'plugin_settings_link' );