<?php 
/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class HCB_shortcode_class
{
	
	function __construct()
	{
		add_shortcode( 'HCB_Button', array(&$this, 'HCB_Btn_Shortcode') );
		
	}
	

	function HCB_Btn_Shortcode($post){
		ob_start();
		$id=$post['id'];
		$ids=explode(",", $id);
		?><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script><?php
		foreach ($ids as $id) {
			if(isset($id)){
				$custom_data = unserialize(get_post_meta($id,'hcb_setting_'.$id, true));


				require(HCB_PATH.'user_view/includes/font_family.php');
				require_once(HCB_PATH.'user_view/includes/rgba_color.php');	

				/**bg color**/
				$button_bg_color_start=HCB_rgba( $custom_data['button_bg_color_start'], $custom_data['opacity_start']);
				$button_bg_color_end=HCB_rgba( $custom_data['button_bg_color_end'], $custom_data['opacity_end']);
				$button_bg_hover_color_start=HCB_rgba( $custom_data['button_bg_hover_color_start'], $custom_data['hover_opacity_start']);
				$button_bg_hover_color_end=HCB_rgba( $custom_data['button_bg_hover_color_end'], $custom_data['hover_opacity_end']);

				?> <style type="text/css"><?php echo $custom_data['custom_css']; ?></style><?php
				
				if($custom_data['button_layout']=="simple_button"){
					require(HCB_PATH.'user_view/button_layouts/simple_button/simple_button.php');
				}
			}		
		}	
		
		return ob_get_clean();
	}
}
?>