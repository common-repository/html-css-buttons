<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="container icon_simple_none hexagons_none circle_icon_none">
	<h2 class="home_title"><?php _e( 'Shadow Settings', 'hcb_button' ); ?></h2>
	<div class="input_group button_shadow_offset_section">
		<div class="input_label">
			<label><?php _e( 'Shadow Offset', 'hcb_button' ); ?></label>
		</div>
		<div class="input_field">
			<div class="input two_col">
				<label><?php _e( 'Left', 'hcb_button' ); ?></label>
				<input type="number" class="input_box" name="shadow_offset_left" value="<?php echo esc_attr($custom_data['shadow_offset_left']); ?>">
				
			</div>

			<div class="input text_right two_col" >
				<label><?php _e( 'Top', 'hcb_button' ); ?></label>
				<input type="number" class="input_box" name="shadow_offset_top" value="<?php echo esc_attr($custom_data['shadow_offset_top']); ?>">
				
			</div>	
		</div>
		<div class="clear_fix"></div> 
	</div>

	<div class="input_group background_shadow_color_section">
		<div class="input_label">
			<label><?php _e( 'Shadow', 'hcb_button' ); ?></label>
		</div>
		<div class="input_field">
			<div class="input two_col">
				<label><?php _e( 'Color', 'hcb_button' ); ?></label>
				<input name="shadow_color" type="text" value="<?php echo esc_attr($custom_data['shadow_color']); ?>" class="hcb_color_field" data-default-color="#000000" />
			</div>

			<div class="input two_col" >
				<label><?php _e( 'Hover', 'hcb_button' ); ?></label>
				<input name="shadow_hover_color" type="text" value="<?php echo esc_attr($custom_data['shadow_hover_color']); ?>" class="hcb_color_field" data-default-color="#000000" />
			</div>				

		</div>
		<div class="clear_fix"></div> 
	</div>

	<div class="input_group button_shadow_blur_section border_none">
		<div class="input_label">
			<label><?php _e( 'Shadow Blur', 'hcb_button' ); ?></label>
		</div>
		<div class="input_field">
			<div class="input two_col">				
				<input type="number" class="input_box" name="shadow_blur" value="<?php echo esc_attr($custom_data['shadow_blur']); ?>">
				
			</div>
		</div>
		<div class="clear_fix"></div> 
	</div>
</div>