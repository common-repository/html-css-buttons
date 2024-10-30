<?php 

/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class HCB_admin_style_script
{
	
	function __construct()
	{
		add_action('admin_enqueue_scripts', array(&$this,'HCB_metaboxes_scripts'));
		
	}

	function HCB_metaboxes_scripts(){

		global $typenow; 	

		if ($typenow=='page' || $typenow=='post'){

			wp_register_style('hcb_font_awesome',HCB_URL.'css/wd_font_awesome/css/font_awesome.css');

			?><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script><?php
		}

		if ($typenow=='hcb_buttons'){

			?><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script><?php
			
			$dataToBePassed = array('HCB_URL'  => HCB_URL);
			wp_enqueue_script( 'jquery');
			wp_enqueue_script('jquery-ui-draggable');

			/*button hide show script*/
			wp_enqueue_script( 'hcb_effects', HCB_URL.'admin/js/button_effect_script.js', array(), false, true );
			
			/**********/
			/*color picker*/
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'hcb_colorpicker_script', HCB_URL.'admin/js/color_picker.js', array( 'wp-color-picker' ), false, true );
			/**************/

			/** metabox style**/
			wp_enqueue_style('hcb_metaboxes_style',HCB_URL.'admin/css/metaboxes_style.css');

			/********/
			
			
			/***live preview******/

			wp_enqueue_script( 'hcb_preview', HCB_URL.'admin/js/preview.js', array(), false, true );
			
			$localize_array=array('hcb_preview'=>$dataToBePassed);

			foreach ($localize_array as $key => $value) {
				wp_localize_script( $key, 'php_vars', $value );
			}

			/** linedtextarea***/
			wp_enqueue_style('hcb-linedtextarea-css',HCB_URL.'admin/css/jquery.numberedtextarea.css');

			wp_enqueue_script( 'hcb-linedtextarea-js', HCB_URL.'admin/js/jquery.numberedtextarea.js', array(), false, true);
			
			wp_enqueue_script( 'hcb_admin_custom', HCB_URL.'admin/js/my_admin_custom.js', array(), false, true );
			/*****/
		}	

	}	
	
}
?>