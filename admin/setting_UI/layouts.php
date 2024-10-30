<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
require(HCB_PATH.'admin/includes/custom_setting_get.php');
?>
<div class="buton_layout_container">
	<input type="radio" name="button_layout" id="simple_button" data-wdbutton="buttons" value="simple_button" <?php echo  esc_attr(($custom_data['button_layout']=='simple_button'))?'checked':''; ?>>
	<label for="simple_button">		
		<h2 align="center" class="h2"><?php echo __( 'Simple Button','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/button_layout_1.png'); ?>">
	</label>

	
	<label for="2d_transitions">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( '2D Transitions','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/2d_transition_layout.png');?>">
		
		
	</label>

	
	<label for="border_transitions">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Border Transitions','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/border_transitions.png');?>">
		
		
	</label>

	
	<label for="curl">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Curl','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/curl_layout.png');?>">
		
		
	</label>

	
	<label for="speech_bubbles">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Speech Bubble','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/speech_bouble_layout.png');?>">
		
		
	</label>

	
	<label for="background_transitions">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'BG Transition','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/background_transition_layout.png');?>">
		
	</label>

	
	<label for="icons">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Icon Button','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/icon_simple.png');?>">
		
	</label>	

	
	<label for="icon_with_text">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Icon With Text','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/icon_with_text.png');?>">
		
	</label>	

	
	<label for="hexagons">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<h2 align="center" class="h2"><?php echo __( 'Hexagon','hcb_button' ) ?></h2>
		<img src="<?php echo esc_url( HCB_URL.'/images/layouts/hexagons_layout.png');?>">
		
	</label>
	
</div>

<!--------------button sets------------>

<div class="buton_layout_container buton_sets_container">
	<h2><?php echo __( 'Button Sets','hcb_button' ) ?></h2>
	

	<label for="social_button_set_with_icon">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/button_sets.png');?>">		
		
	</label>

	
	<label for="social_model_1">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_1.png');?>">		
		
	</label>
	

	
	<label for="social_model_2">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_2.png');?>">		
		
	</label>

	
	<label for="social_model_3">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_3.png');?>">		
		
	</label>
	
	<label for="social_model_4">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_4.png');?>">		
		
	</label>
	
	<label for="social_model_5">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_5.png');?>">		
		
	</label>
	
	<label for="social_model_6">
		<div class="Hcb_btn_ribbon"><a target="_blank" href="<?php echo esc_url('http://webdzier.com/'); ?>"><span><?php echo __( 'Pro','hcb_button' ) ?></span></a></div>
		<img src="<?php echo esc_url( HCB_URL.'/images/button_sets/social_model_6.png');?>">		
		
	</label>	
</div>