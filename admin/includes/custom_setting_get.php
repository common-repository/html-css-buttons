<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$id=$post->ID;
$custom_data = unserialize(get_post_meta($id,'hcb_setting_'.$id, true));
if(!(isset($custom_data['button_layout']) && isset($id))){
	$custom_data = unserialize(get_option('HCB_Default_Setting', true));	
} 
?>