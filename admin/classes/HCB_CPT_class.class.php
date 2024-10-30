<?php 
/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class HCB_CPT_class 
{
	
	function __construct(){
		add_action( 'init', array(&$this,'HCB_Fun_Cpt'));
		add_action('media_buttons_context', array(&$this,'HCB_custom_button'),17);	
		add_action('admin_footer', array(&$this,'HCB_button_popup_content'));
		
	}

	function HCB_Fun_Cpt(){
		require_once(HCB_PATH.'admin/includes/HCB_CPT.php');

		function hcb_custom_btn_cpt($id,$custom_data,$button_bg_color_start,$button_bg_color_end,$button_bg_hover_color_start,$button_bg_hover_color_end,$path){
			?>
			<div class="hcb_layout_container">			
				<div>
					<?php require(HCB_PATH.'user_view/button_layouts/'.$path); ?>			
				</div>						
				<div class="clear_fix"></div>
			</div>
			<?php
		}
		
	}

	function hcb_button_columns($columns){
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Title' ),
			'button_style' => __( 'hcb_button' ),
			'shortcode' => __( 'Shortcode' ),
			'date' => __( 'Date' )
			);
		return $columns;
	}

	function hcb_button_manage_columns($columns,$post_id){
		global $post;
		switch( $columns ) {
			case 'shortcode' :
			echo '<input type="text" value="[HCB_Button  id='.$post_id.']" onclick="'.esc_js('jQuery(this).select()').'" readonly="readonly" />';
			break;
			case 'button_style' :

			$custom_data = unserialize(get_post_meta(get_the_ID(),'hcb_setting_'.$post_id, true));
			require(HCB_PATH.'user_view/includes/font_family.php');
			require_once(HCB_PATH.'user_view/includes/rgba_color.php');

			/**bg color**/
			$button_bg_color_start=HCB_rgba( $custom_data['button_bg_color_start'], $custom_data['opacity_start']);
			$button_bg_color_end=HCB_rgba( $custom_data['button_bg_color_end'], $custom_data['opacity_end']);
			$button_bg_hover_color_start=HCB_rgba( $custom_data['button_bg_hover_color_start'], $custom_data['hover_opacity_start']);
			$button_bg_hover_color_end=HCB_rgba( $custom_data['button_bg_hover_color_end'], $custom_data['hover_opacity_end']);	

			require(HCB_PATH.'user_view/coman_css/custom_css.php');
			if($custom_data['button_layout']=="simple_button"){
				hcb_custom_btn_cpt($post_id,$custom_data,$button_bg_color_start,$button_bg_color_end,$button_bg_hover_color_start,$button_bg_hover_color_end,'simple_button/simple_button.php');
			}
			break;
			default :
			break;
		}
	}

	function HCB_custom_button($context){
		$context .= '<a class="button thickbox"  title="'."Select Button Title to insert into post".'"  
		href="#TB_inline?width=400&inlineId=hcb_button_div">
		<span class="wp-media-buttons-icon" style="background: url('.HCB_URL.'/images/button_cpt_icon.png); background-repeat: no-repeat; background-position: left bottom;"></span>
		HCB Button</a>';
		return $context;
	}

	function HCB_button_popup_content(){
		require(HCB_PATH.'admin/includes/page_post_custom_button.php');		
	}	

}

?>