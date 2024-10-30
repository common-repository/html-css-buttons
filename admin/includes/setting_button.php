<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
require(HCB_PATH.'admin/includes/custom_setting_get.php');
?>

<div class="hcb_preview_box">
	<h2 class="header"><?php echo __('Live Preview','hcb_button') ?></h2>
	<div class="hcb_preview_style"></div>	
	<div class="hcb_live">
		
	</div>
	<h3 class="header_hover"><?php echo __('Hover','hcb_button') ?></h3>
	<div class="hcb_live_hover"></div>	
</div>
<div class="hcb_settings_box">
	<div class="wrapper buttons"><?php  
	require_once(HCB_PATH.'admin/setting_UI/button_setting_basic.php');
	require_once(HCB_PATH.'admin/setting_UI/button_setting_text_shadow.php');
	require_once(HCB_PATH.'admin/setting_UI/button_setting_border.php'); 
	require_once(HCB_PATH.'admin/setting_UI/button_setting_background.php'); 
	require_once(HCB_PATH.'admin/setting_UI/button_setting_container.php'); 
	?></div>
	
</div>