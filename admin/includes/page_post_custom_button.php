<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
wp_enqueue_style('post_page_button',HCB_URL.'admin/css/post_and_page_button.css');
?>
<div id="hcb_button_div" style="display:none;">
	<h2 align="center"><?php echo __( 'HCB Button Shortcode','hcb_button' ) ?></h2>
	<?php 
	$All_posts = wp_count_posts('hcb_buttons')->publish;
	$ARGSM= array('post_type'=>'hcb_buttons','posts_per_page'=>$All_posts);			
	$button_short=new wp_Query($ARGSM);
	if($button_short->have_posts()){
		
		while($button_short->have_posts()):$button_short->the_post();
		$custom_data = unserialize(get_post_meta(get_the_ID(),'hcb_setting_'.get_the_ID(), true));
		$id=get_the_ID();
		require(HCB_PATH.'user_view/includes/font_family.php');
		require_once(HCB_PATH.'user_view/includes/rgba_color.php');

		/**bg color**/
		$button_bg_color_start=HCB_rgba( $custom_data['button_bg_color_start'], $custom_data['opacity_start']);
		$button_bg_color_end=HCB_rgba( $custom_data['button_bg_color_end'], $custom_data['opacity_end']);
		$button_bg_hover_color_start=HCB_rgba( $custom_data['button_bg_hover_color_start'], $custom_data['hover_opacity_start']);
		$button_bg_hover_color_end=HCB_rgba( $custom_data['button_bg_hover_color_end'], $custom_data['hover_opacity_end']);	
		
		require(HCB_PATH.'user_view/coman_css/custom_css.php');
		
		if($custom_data['button_layout']=="simple_button"){
			hcb_custom_btn($id,$custom_data,$button_bg_color_start,$button_bg_color_end,$button_bg_hover_color_start,$button_bg_hover_color_end,'simple_button/simple_button.php');
		}
		
		endwhile;
	}else{
		echo __( "<h2>Empty</h2>",'hcb_button' );
	}


	function hcb_custom_btn($id,$custom_data,$button_bg_color_start,$button_bg_color_end,$button_bg_hover_color_start,$button_bg_hover_color_end,$path){
		?>
		<div class="hcb_layout_container">
			<h2 align="center"><?php the_title(); ?></h2>
			<div class="col-2">

				<?php require(HCB_PATH.'user_view/button_layouts/'.$path); ?>			
			</div>	
			<div class="col-2">
				<button class="hcb_btn_insert" value="<?php echo $id;?>"><?php echo __( 'Use This Button','hcb_button' ) ?></button>
			</div>				
			<div class="clear_fix"></div>
		</div>
		<?php
	}

	function hcb_btn_sets($src,$id){
		?>
		<div class="hcb_layout_container">
			<h2 align="center"><?php the_title(); ?></h2>
			<div class="col-2">
				<img src="<?php echo $src;?>">
			</div>
			<div class="col-2">
				<button class="hcb_btn_insert" value="<?php echo $id;?>"><?php echo __( 'Use This Button','hcb_button' ) ?></button>
			</div>				
			<div class="clear_fix"></div>
		</div>
		<?php
	}
	?>
</div>
<script type="text/javascript">
jQuery(function(){
	jQuery('.hcb_layout_container a').click(function(e){
		e.preventDefault();
	});

	jQuery('.hcb_btn_insert').click(function(){
		var button_id=jQuery(this).val();
		window.send_to_editor('<p>[HCB_Button id='+button_id+']</p>');
		tb_remove();
	});

});
</script>