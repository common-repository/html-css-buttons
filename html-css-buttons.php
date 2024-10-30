<?php 
/*
Plugin Name: Html Css Buttons
Plugin URI: http://bangalorethemes.com/pluginbook/html-css-button/
Description: Create your best html button. 
Version: 1.0.1
Author: bangalorethemes
Author URI: http://bangalorethemes.com
Text Domain: hcb_button 
Domain Path: /languages
*/


if ( ! defined( 'ABSPATH' ) ) exit;

define('HCB_URL', plugin_dir_url(__FILE__));
define('HCB_PATH',plugin_dir_path(__FILE__));


add_action('plugins_loaded', 'HCB_GetReadyTranslation');
function HCB_GetReadyTranslation() {
	load_plugin_textdomain('hcb_button', FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

register_activation_hook(__FILE__, 'HCB_activation_setting');	
function HCB_activation_setting(){
	require_once(HCB_PATH.'admin/includes/default_setting.php');
}

register_deactivation_hook(__FILE__,'HCB_deactivation_setting');
function HCB_deactivation_setting(){
	delete_option('HCB_Default_Setting');
}

add_action('wp_enqueue_scripts', 'HCB_default_style');
function HCB_default_style(){		
	wp_enqueue_style('hcb_default_style',HCB_URL.'/user_view/coman_css/default_style.css');
}

function HCB_current_user(){
	if ( current_user_can( 'administrator' ) ) {
		if(is_admin()){	
			require_once(HCB_PATH.'admin/classes/HCB_CPT_class.class.php');	
			require_once(HCB_PATH.'admin/classes/HCB_admin_style_script.class.php');	
			require_once(HCB_PATH.'admin/classes/HCB_metaboxes_class.class.php');

			new HCB_CPT_class();
			new HCB_admin_style_script();	
			new HCB_metaboxes_class();	
		}	
	}	
}
add_action( 'plugins_loaded', 'HCB_current_user');

require_once(HCB_PATH.'user_view/classes/HCB_shortcode_class.class.php');	
new HCB_shortcode_class();
require_once(HCB_PATH.'admin/classes/widget/button_widget.php');

?>