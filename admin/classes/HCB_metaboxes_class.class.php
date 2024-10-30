<?php 

/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class HCB_metaboxes_class
{
	
	function __construct()
	{
		add_action('add_meta_boxes',array(&$this, 'HCB_meta_box_function'));
		add_action('save_post',array(&$this,'HCB_custom_setting_save'));		
	}

	function HCB_meta_box_function(){

		add_meta_box('HCB_layout_select',  __('Button Layouts', 'hcb_button'),array(&$this, 'HCB_layout_select'),
			'hcb_buttons','normal','low');
		
		add_meta_box('HBC_setting_metabox', __('Button Settings', 'hcb_button'),array(&$this, 'HBC_setting_metabox'),
			'hcb_buttons','normal','low');

		
		add_meta_box('HCB_shortcode_meta_box', __('Shortcode', 'hcb_button'),array(&$this, 'HCB_shortcode_meta_box'),
			'hcb_buttons','side','low');

		add_meta_box('HCB_rateus', __('Rate Us If You Like This Plugin', 'hcb_button'), array(&$this, 'HCB_rateus_function'), 'hcb_buttons', 'side', 'low');
	}	

	function HCB_layout_select($post){ 
		require_once(HCB_PATH.'admin/setting_UI/layouts.php');
	}

	function HBC_setting_metabox($post){ 
		require(HCB_PATH.'admin/includes/setting_button.php');		
	}	

	function HCB_custom_setting_save($post){
		require_once(HCB_PATH.'admin/includes/button_custom_setting_save.php');
	}

	function HCB_shortcode_meta_box($post){
		?>	
		<div class="shortcode_meta_box">
			<input type="text" value="<?php echo "[HCB_Button id=".get_the_ID()."]"; ?>" onclick="<?php echo esc_js( 'jQuery(this).select()' ); ?>" readonly/>
		</div>
		<?php 
	}

	function HCB_rateus_function(){
		require_once(HCB_PATH.'admin/includes/rate_us.php');		
	}


}
?>